@extends('home')

@section('content')

<div class="row" id="center_block">

    <div class="col-md-4 col-md-offset-3 text-center"><h1>Upload your file here</h1></div>

</div>


<div class="row">

    <div class="col-md-4 col-md-offset-3 text-center" >

        <form>

                <input type="file"  title="Search for a image to unique" data-filename-placement="inside" class="btn btn-primary" accept="image/x-png,image/gif,image/jpeg">
            <span class="help-block">You can use only .jpg, .png or .gif.</span>


                <input type="submit" class="btn btn-primary" value="Unique now">

        </form>

    </div>

</div>

@endsection