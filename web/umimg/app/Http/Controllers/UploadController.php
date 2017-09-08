<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Controllers\Controller;

use Intervention\Image\ImageManager as Image;






class UploadController extends Controller
{
    public function uploadfile(Request $request)
    {



        $this->validate($request, [
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4000',
        ]);

        $path='';

        $imageName = $request->image->getClientOriginalName();

        //$request->image->move(public_path('upload_images'), $imageName);

        $img_path=public_path('images')."/".$imageName;


        $manager = new Image(array('driver' => 'imagick'));

        $image = $manager->make($request->image);

        $request->session()->put('img_path',$img_path);

        if($request->unique==1)
        {
            $image->flip('g');
            $image->rotate(-20);

        }

        if($image->save($img_path)) $path=$imageName;

        return back()
            ->with('note','Image Uploaded successfully.')
            ->with('path',$path);


    }

    public function get_my_file(Request $request)
    {
        $img_path=$request->session()->get('img_path');
        $manager = new Image(array('driver' => 'imagick'));
        $image=$manager->make($img_path)->stream('jpg', 60);

        header('Content-Type: image/jpeg');
        echo $image;

    }

}
