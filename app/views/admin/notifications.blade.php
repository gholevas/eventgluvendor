@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Notifications
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css -->
<link rel="stylesheet" href="{{ asset('assets/vendors/noty-2.2.4/fluid.css') }}" />
<link href="{{ asset('assets/css/pages/toastr.css') }}" rel="stylesheet" />
<!--end of page level css-->
@stop


{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Notifications</h1>
    <ol class="breadcrumb">
        <li>
            <a href="index"> <i class="livicon" data-name="home" data-size="14" data-c="#000" data-loop="true"></i>
                Home
            </a>
        </li>
        <li>
            <a href="#">UI features</a>
        </li>
        <li class="active">Notifications</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title"> <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Notifications
                    </h3>
                </div>
                <div class="portlet-body">
                    <div id="layouts">
                        <div class="g1 layout-demo">&nbsp;</div>
                        <div class="g1 layout-demo">
                            <h6>
                                <span class="lay-title">Top</span>
                                <span class="runner" data-layout="top" data-type="alert">Alert</span>
                                <span class="runner" data-layout="top" data-type="success">Success</span>
                                <span class="runner" data-layout="top" data-type="error">Error</span>
                                <br>
                                <span class="runner" data-layout="top" data-type="warning">Warning</span>
                                <span class="runner" data-layout="top" data-type="information">Information</span>
                                <span class="runner" data-layout="top" data-type="confirm">Confirm</span>
                            </h6>
                        </div>
                        <div class="g1 layout-demo">&nbsp;</div>
                        <div class="cf"></div>
                        <div class="g1 layout-demo">
                            <h6>
                                <span class="lay-title">TopLeft</span>
                                <span class="runner" data-layout="topLeft" data-type="alert">Alert</span>
                                <span class="runner" data-layout="topLeft" data-type="success">Success</span>
                                <span class="runner" data-layout="topLeft" data-type="error">Error</span>
                                <br>
                                <span class="runner" data-layout="topLeft" data-type="warning">Warning</span>
                                <span class="runner" data-layout="topLeft" data-type="information">Information</span>
                                <span class="runner" data-layout="topLeft" data-type="confirm">Confirm</span>
                            </h6>
                        </div>
                        <div class="g1 layout-demo">
                            <h6>
                                <span class="lay-title">TopCenter</span>
                                <span class="runner" data-layout="topCenter" data-type="alert">Alert</span>
                                <span class="runner" data-layout="topCenter" data-type="success">Success</span>
                                <span class="runner" data-layout="topCenter" data-type="error">Error</span>
                                <br>
                                <span class="runner" data-layout="topCenter" data-type="warning">Warning</span>
                                <span class="runner" data-layout="topCenter" data-type="information">Information</span>
                                <span class="runner" data-layout="topCenter" data-type="confirm">Confirm</span>
                            </h6>
                        </div>
                        <div class="g1 layout-demo">
                            <h6>
                                <span class="lay-title">TopRight</span>
                                <span class="runner" data-layout="topRight" data-type="alert">Alert</span>
                                <span class="runner" data-layout="topRight" data-type="success">Success</span>
                                <span class="runner" data-layout="topRight" data-type="error">Error</span>
                                <br>
                                <span class="runner" data-layout="topRight" data-type="warning">Warning</span>
                                <span class="runner" data-layout="topRight" data-type="information">Information</span>
                                <span class="runner" data-layout="topRight" data-type="confirm">Confirm</span>
                            </h6>
                        </div>
                        <div class="cf"></div>
                        <div class="g1 layout-demo">
                            <h6>
                                <span class="lay-title">CenterLeft</span>
                                <span class="runner" data-layout="centerLeft" data-type="alert">Alert</span>
                                <span class="runner" data-layout="centerLeft" data-type="success">Success</span>
                                <span class="runner" data-layout="centerLeft" data-type="error">Error</span>
                                <br>
                                <span class="runner" data-layout="centerLeft" data-type="warning">Warning</span>
                                <span class="runner" data-layout="centerLeft" data-type="information">Information</span>
                                <span class="runner" data-layout="centerLeft" data-type="confirm">Confirm</span>
                            </h6>
                        </div>
                        <div class="g1 layout-demo">
                            <h6>
                                <span class="lay-title">Center</span>
                                <span class="runner" data-layout="center" data-type="alert">Alert</span>
                                <span class="runner" data-layout="center" data-type="success">Success</span>
                                <span class="runner" data-layout="center" data-type="error">Error</span>
                                <br>
                                <span class="runner" data-layout="center" data-type="warning">Warning</span>
                                <span class="runner" data-layout="center" data-type="information">Information</span>
                                <span class="runner" data-layout="center" data-type="confirm">Confirm</span>
                            </h6>
                        </div>
                        <div class="g1 layout-demo">
                            <h6>
                                <span class="lay-title">CenterRight</span>
                                <span class="runner" data-layout="centerRight" data-type="alert">Alert</span>
                                <span class="runner" data-layout="centerRight" data-type="success">Success</span>
                                <span class="runner" data-layout="centerRight" data-type="error">Error</span>
                                <br>
                                <span class="runner" data-layout="centerRight" data-type="warning">Warning</span>
                                <span class="runner" data-layout="centerRight" data-type="information">Information</span>
                                <span class="runner" data-layout="centerRight" data-type="confirm">Confirm</span>
                            </h6>
                        </div>
                        <div class="cf"></div>
                        <div class="g1 layout-demo">
                            <h6>
                                <span class="lay-title">BottomLeft</span>
                                <span class="runner" data-layout="bottomLeft" data-type="alert">Alert</span>
                                <span class="runner" data-layout="bottomLeft" data-type="success">Success</span>
                                <span class="runner" data-layout="bottomLeft" data-type="error">Error</span>
                                <br>
                                <span class="runner" data-layout="bottomLeft" data-type="warning">Warning</span>
                                <span class="runner" data-layout="bottomLeft" data-type="information">Information</span>
                                <span class="runner" data-layout="bottomLeft" data-type="confirm">Confirm</span>
                            </h6>
                        </div>
                        <div class="g1 layout-demo">
                            <h6>
                                <span class="lay-title">BottomCenter</span>
                                <span class="runner" data-layout="bottomCenter" data-type="alert">Alert</span>
                                <span class="runner" data-layout="bottomCenter" data-type="success">Success</span>
                                <span class="runner" data-layout="bottomCenter" data-type="error">Error</span>
                                <br>
                                <span class="runner" data-layout="bottomCenter" data-type="warning">Warning</span>
                                <span class="runner" data-layout="bottomCenter" data-type="information">Information</span>
                                <span class="runner" data-layout="bottomCenter" data-type="confirm">Confirm</span>
                            </h6>
                        </div>
                        <div class="g1 layout-demo">
                            <h6>
                                <span class="lay-title">BottomRight</span>
                                <span class="runner" data-layout="bottomRight" data-type="alert">Alert</span>
                                <span class="runner" data-layout="bottomRight" data-type="success">Success</span>
                                <span class="runner" data-layout="bottomRight" data-type="error">Error</span>
                                <br>
                                <span class="runner" data-layout="bottomRight" data-type="warning">Warning</span>
                                <span class="runner" data-layout="bottomRight" data-type="information">Information</span>
                                <span class="runner" data-layout="bottomRight" data-type="confirm">Confirm</span>
                            </h6>
                        </div>
                        <div class="cf"></div>
                        <div class="g1 layout-demo">&nbsp;</div>
                        <div class="g1 layout-demo">
                            <h6>
                                <span class="lay-title">Bottom</span>
                                <span class="runner" data-layout="bottom" data-type="alert">Alert</span>
                                <span class="runner" data-layout="bottom" data-type="success">Success</span>
                                <span class="runner" data-layout="bottom" data-type="error">Error</span>
                                <br>
                                <span class="runner" data-layout="bottom" data-type="warning">Warning</span>
                                <span class="runner" data-layout="bottom" data-type="information">Information</span>
                                <span class="runner" data-layout="bottom" data-type="confirm">Confirm</span>
                            </h6>
                        </div>
                        <div class="g1 layout-demo">&nbsp;</div>
                        <div class="cf"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script type="text/javascript" src="{{ asset('assets/vendors/noty-2.2.4/js/noty/packaged/jquery.noty.packaged.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendors/noty-2.2.4/js/script.js') }}"></script>
@stop