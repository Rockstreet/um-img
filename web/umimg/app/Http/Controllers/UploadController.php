<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Controllers\Controller;



class UploadController extends Controller
{
    public function uploadfile(Request $request)
    {



        $this->validate($request, [
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4000',
        ]);


        $imageName = $request->image->getClientOriginalName();
        $request->image->move(public_path('images'), $imageName);





        return back()
            ->with('note','Image Uploaded successfully.')
            ->with('path',$imageName);


    }

}
