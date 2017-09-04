@extends('home')

@section('content')

<div class="row" id="center_block">

    <div class="col-md-12 text-center" ><h1>Upload your file here</h1></div>

</div>

<div class="row" >
    <div class="col-md-12">

<form class="form-horizontal" action="/upload" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <fieldset>

        <!-- Multiple Checkboxes (inline) -->

        <div class="form-group">
            <label class="col-md-4 control-label" for="filebutton">File</label>
            <div class="col-md-4">
                <input type="file"  title="Search for a image to unique" name="image" data-filename-placement="inside" class="btn btn-primary" accept="image/x-png,image/gif,image/jpeg">
                <p class="help-block">* you can use only .jpg, .png or .gif (<4Mb).</p>
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4 control-label" for="checkboxes">Unique</label>
            <div class="col-md-4">
                <label class="checkbox-inline" for="checkboxes-0">
                    <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
                    &nbsp;
                </label>
            </div>
        </div>

        <!-- Appended Input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="appendedtext">Width</label>
            <div class="col-md-2">
                <div class="input-group">
                    <input id="appendedtext" name="appendedtext" class="form-control" placeholder="width" type="text">
                    <span class="input-group-addon">px</span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="appendedtext">Height</label>
            <div class="col-md-2">
                <div class="input-group">
                    <input id="appendedtext" name="appendedtext" class="form-control" placeholder="height" type="text">
                    <span class="input-group-addon">px</span>
                </div>
            </div>
        </div>

        <!-- Multiple Radios (inline) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="radios">Output format:  </label>
            <div class="col-md-4">
                <label class="radio-inline" for="radios-0">
                    <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                    .jpg
                </label>
                <label class="radio-inline" for="radios-1">
                    <input type="radio" name="radios" id="radios-1" value="2">
                    .png
                </label>
                <label class="radio-inline" for="radios-2">
                    <input type="radio" name="radios" id="radios-2" value="3">
                    .gif
                </label>

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="radios">Output quality:  </label>
            <div class="col-md-4">
                <label class="radio-inline" for="radios-0">
                    <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                    hight
                </label>
                <label class="radio-inline" for="radios-1">
                    <input type="radio" name="radios" id="radios-1" value="2">
                    web
                </label>
                <label class="radio-inline" for="radios-2">
                    <input type="radio" name="radios" id="radios-2" value="3">
                    low
                </label>

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
                <input type="submit" class="btn btn-success" value="Do it now">
            </div>
        </div>


    </fieldset>
</form>

    </div>
</div>


    <br><br>

<div class="row">
    <div class="col-md-6 col-md-offset-3 text-center" >



        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

{{$message = Session::get('note')}}



    @if(isset($note))
        Results: {{$note}}
    </div>



</div>
@endif









@endsection