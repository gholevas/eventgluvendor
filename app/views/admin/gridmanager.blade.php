@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Page Builder
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css -->
<link href="{{ asset('assets/vendors/gridmanager/dist/css/jquery.gridmanager.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/vendors/gridmanager/demo.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/pages/grid_manager.css') }}" rel="stylesheet" />
<!-- page level css ends-->
@stop


{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>
        Page Builder
    </h1>
    <ol class="breadcrumb">
        <li class="active">
            <a href="index"> <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                Home
            </a>
        </li>
        <li class="active">
            <a href="#">Builders</a>
        </li>
        <li class="active">
            <a href="#">
                Page Builder
            </a>
        </li>
    </ol>
</section>
<!-- breadcrumb-->
<!-- Main content -->
<section class="content paddingleft_right15">
    <div class="alert alert-success alert-dismissable visible-xs visible-md">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        May not work properly in touch enabled devices as it as requires drag and drop.
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"> <i class="livicon" data-name="map" data-size="14" data-loop="true" data-c="white" data-hc="white"></i>
                Page Builder
            </h3>
            <span class="pull-right clickable">
                <i class="glyphicon glyphicon-chevron-up"></i>
            </span>
        </div>
        <div class="panel-body">
            <div class="row" style="padding:30px;">
                <div id="mycanvas">
                    <div class='row'>
                        <div class='column col-md-12'>
                            <p>
                                <img data-src="holder.js/1900x100/#418bca:#fff" class='img-responsive'></p>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='column col-md-6'>
                            <h2>
                                2-Column Row
                            </h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque hendrerit lorem sed posuere eleifend. Ut nec tellus sed erat iaculis bibendum ac et diam. Cras convallis tincidunt placerat. Duis posuere leo quis tincidunt iaculis. Vestibulum pulvinar, neque quis cursus rhoncus, justo mi dictum enim, non facilisis ligula justo eleifend felis. Donec velit nibh, egestas eu sapien at, bibendum consectetur urna. Donec tincidunt vitae erat vitae congue.
                            </p>
                        </div>
                        <div class='column col-md-6'>
                            <h2>
                                2-Column Row
                            </h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque hendrerit lorem sed posuere eleifend. Ut nec tellus sed erat iaculis bibendum ac et diam. Cras convallis tincidunt placerat. Duis posuere leo quis tincidunt iaculis. Vestibulum pulvinar, neque quis cursus rhoncus, justo mi dictum enim, non facilisis ligula justo eleifend felis. Donec velit nibh, egestas eu sapien at, bibendum consectetur urna. Donec tincidunt vitae erat vitae congue.
                            </p>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='column col-md-4'>
                            <h3>
                                3-Column Row
                            </h3>
                            <p>
                                Vivamus faucibus nibh ut aliquam dignissim. Nunc tempus velit sit amet eleifend tempor. Aliquam vel tortor euismod, viverra urna tempus, scelerisque ipsum. Pellentesque at mauris non tortor elementum pretium. Integer rutrum libero at facilisis interdum. Praesent lobortis elit erat, quis elementum justo rhoncus eu. Ut eu dui lectus. Duis faucibus eu augue ut placerat.
                            </p>
                        </div>
                        <div class='column col-md-4'>
                            <h3>
                                3-Column Row
                            </h3>
                            <p>
                                Vivamus faucibus nibh ut aliquam dignissim. Nunc tempus velit sit amet eleifend tempor. Aliquam vel tortor euismod, viverra urna tempus, scelerisque ipsum. Pellentesque at mauris non tortor elementum pretium. Integer rutrum libero at facilisis interdum. Praesent lobortis elit erat, quis elementum justo rhoncus eu. Ut eu dui lectus. Duis faucibus eu augue ut placerat.
                            </p>
                        </div>
                        <div class='column col-md-4'>
                            <h3>
                                3-Column Row
                            </h3>
                            <p>
                                Vivamus faucibus nibh ut aliquam dignissim. Nunc tempus velit sit amet eleifend tempor. Aliquam vel tortor euismod, viverra urna tempus, scelerisque ipsum. Pellentesque at mauris non tortor elementum pretium. Integer rutrum libero at facilisis interdum. Praesent lobortis elit erat, quis elementum justo rhoncus eu. Ut eu dui lectus. Duis faucibus eu augue ut placerat.
                            </p>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='column col-md-3'>
                            <p>
                                <img data-src="holder.js/400x150/#6cc66c:#fff" class='img-responsive'></p>
                            <h4>
                                4-Column Row
                            </h4>
                            <p>
                                Vivamus faucibus nibh ut aliquam dignissim. Nunc tempus velit sit amet eleifend tempor. Aliquam vel tortor euismod, viverra urna tempus, scelerisque ipsum. Pellentesque at mauris non tortor elementum pretium. Integer rutrum libero at facilisis interdum. Praesent lobortis elit erat, quis elementum justo rhoncus eu. Ut eu dui lectus. Duis faucibus eu augue ut placerat.
                            </p>
                        </div>
                        <div class='column col-md-3'>
                            <p>
                                <img data-src="holder.js/400x150/#67c5df:#fff" class='img-responsive'></p>
                            <h4>
                                4-Column Row
                            </h4>
                            <p>
                                Vivamus faucibus nibh ut aliquam dignissim. Nunc tempus velit sit amet eleifend tempor. Aliquam vel tortor euismod, viverra urna tempus, scelerisque ipsum. Pellentesque at mauris non tortor elementum pretium. Integer rutrum libero at facilisis interdum. Praesent lobortis elit erat, quis elementum justo rhoncus eu. Ut eu dui lectus. Duis faucibus eu augue ut placerat.
                            </p>
                        </div>
                        <div class='column col-md-3'>
                            <p>
                                <img data-src="holder.js/400x150/#489a14:#fff" class='img-responsive'></p>
                            <h4>
                                4-Column Row
                            </h4>
                            <p>
                                Vivamus faucibus nibh ut aliquam dignissim. Nunc tempus velit sit amet eleifend tempor. Aliquam vel tortor euismod, viverra urna tempus, scelerisque ipsum. Pellentesque at mauris non tortor elementum pretium. Integer rutrum libero at facilisis interdum. Praesent lobortis elit erat, quis elementum justo rhoncus eu. Ut eu dui lectus. Duis faucibus eu augue ut placerat.
                            </p>
                        </div>
                        <div class='column col-md-3'>
                            <p>
                                <img data-src="holder.js/400x150/#ef6f6c:#fff" class='img-responsive'></p>
                            <h4>
                                4-Column Row
                            </h4>
                            <p>
                                Vivamus faucibus nibh ut aliquam dignissim. Nunc tempus velit sit amet eleifend tempor. Aliquam vel tortor euismod, viverra urna tempus, scelerisque ipsum. Pellentesque at mauris non tortor elementum pretium. Integer rutrum libero at facilisis interdum. Praesent lobortis elit erat, quis elementum justo rhoncus eu. Ut eu dui lectus. Duis faucibus eu augue ut placerat.
                            </p>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='column col-md-2'>
                            <h5>
                                6-Column Row
                            </h5>
                            <p>
                                &nbsp;Ut eu dui lectus. Duis faucibus eu augue ut placerat.
                            </p>
                        </div>
                        <div class='column col-md-2'>
                            <h5>
                                6-Column Row
                            </h5>
                            <p>
                                &nbsp;Ut eu dui lectus. Duis faucibus eu augue ut placerat.
                            </p>
                        </div>
                        <div class='column col-md-2'>
                            <h5>
                                6-Column Row
                            </h5>
                            <p>
                                &nbsp;Ut eu dui lectus. Duis faucibus eu augue ut placerat.
                            </p>
                        </div>
                        <div class='column col-md-2'>
                            <h5>
                                6-Column Row
                            </h5>
                            <p>
                                &nbsp;Ut eu dui lectus. Duis faucibus eu augue ut placerat.
                            </p>
                        </div>
                        <div class='column col-md-2'>
                            <h5>
                                6-Column Row
                            </h5>
                            <p>
                                &nbsp;Ut eu dui lectus. Duis faucibus eu augue ut placerat.
                            </p>
                        </div>
                        <div class='column col-md-2'>
                            <h5>
                                6-Column Row
                            </h5>
                            <p>
                                &nbsp;Ut eu dui lectus. Duis faucibus eu augue ut placerat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@stop

@section('footer_scripts')
<script type="text/javascript" src="{{ asset('assets/vendors/tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendors/tinymce/js/tinymce/jquery.tinymce.min.js') }}"></script>
<script src="{{ asset('assets/vendors/gridmanager/dist/js/jquery.gridmanager.js') }}"></script>
<script src="{{ asset('assets/js/pages/grid_manager.js') }}"></script>
@stop