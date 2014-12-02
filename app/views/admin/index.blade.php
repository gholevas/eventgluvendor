@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Event Detail
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css -->
<link href="{{ asset('assets/vendors/fullcalendar/css/fullcalendar.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/pages/calendar_custom.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/only_dashboard.css') }}" />
<!--end of page level css-->
@stop


{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Venue Name | Dashboard</h1>
    <ol class="breadcrumb">
        <li class="active">
            <a href="#"> <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                Dashboard
            </a>
        </li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInLeftBig">
            <!-- Trans label pie charts strats here-->
            <div class="lightbluebg no-radius">
                <a href="{{ URL::to('admin/analytics') }}" style="color:white;">
                    <div class="panel-body squarebox square_boxs">
                        <div class="col-xs-12 pull-left nopadmar">
                            <div class="row">
                                <div class="square_box col-xs-7 text-right">
                                    <span>Views Today</span>
                                    <div class="number" id="myTargetElement1"></div>
                                </div> <i class="livicon  pull-right" data-name="eye-open" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <small class="stat-label">Last Week</small>
                                    <h4 id="myTargetElement1.1"></h4>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <small class="stat-label">Last Month</small>
                                    <h4 id="myTargetElement1.2"></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInUpBig">
            <!-- Trans label pie charts strats here-->
            <div class="palebluecolorbg no-radius">
                <a href="{{ URL::to('admin/upcoming_events') }}" style="color:white;">
                    <div class="panel-body squarebox square_boxs">
                        <div class="col-xs-12 pull-left nopadmar">
                            <div class="row">
                                <div class="square_box col-xs-7 pull-left">
                                    <span>Upcoming Events</span>
                                    <div class="number" id="myTargetElement2"></div>
                                </div>
                                <i class="livicon pull-right" data-name="stopwatch" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <small class="stat-label">Last Week</small>
                                    <h4 id="myTargetElement2.1"></h4>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <small class="stat-label">Last Month</small>
                                    <h4 id="myTargetElement2.2"></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-md-6 margin_10 animated fadeInDownBig">
            <!-- Trans label pie charts strats here-->
            <div class="goldbg no-radius">
                <div class="panel-body squarebox square_boxs">
                    <div class="col-xs-12 pull-left nopadmar">
                        <div class="row">
                            <div class="square_box col-xs-7 pull-left">
                                <span>Leads</span>
                                <div class="number" id="myTargetElement3"></div>
                            </div>
                            <i class="livicon pull-right" data-name="user-add" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <small class="stat-label">Last Week</small>
                                <h4 id="myTargetElement3.1"></h4>
                            </div>
                            <div class="col-xs-6 text-right">
                                <small class="stat-label">Last Month</small>
                                <h4 id="myTargetElement3.2"></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInRightBig">
            <!-- Trans label pie charts strats here-->
            <div class="redbg no-radius">
                <div class="panel-body squarebox square_boxs">
                    <div class="col-xs-12 pull-left nopadmar">
                        <div class="row">
                            <div class="square_box col-xs-7 pull-left">
                                <span>Past Events</span>
                                <div class="number" id="myTargetElement4"></div>
                            </div>
                            <i class="livicon pull-right" data-name="archive-add" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <small class="stat-label">Last Week</small>
                                <h4 id="myTargetElement4.1"></h4>
                            </div>
                            <div class="col-xs-6 text-right">
                                <small class="stat-label">Last Month</small>
                                <h4 id="myTargetElement4.2"></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/row-->
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="panel panel-primary panel-border">
                <div class="panel-heading border-light">
                    <h4 class="panel-title">
                        <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="white" data-hc="white"></i>
                        Calendar
                    </h4>
                </div>
                <div class="panel-body">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
        <!-- To do list -->
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="panel panel-primary todolist">
                <div class="panel-heading border-light">
                    <h4 class="panel-title">
                        <i class="livicon" data-name="medal" data-size="18" data-color="white" data-hc="white" data-l="true"></i>
                        To Do List
                    </h4>
                </div>
                <div class="panel-body nopadmar">
                    <form class="row list_of_items">
                        <div class="todolist_list showactions">
                            <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                <div class="todoitemcheck checkbox-custom">
                                    <input type="checkbox" class="striked large" />
                                </div>
                                <div class="todotext todoitem">Meeting with CEO</div>
                            </div>
                            <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                <a href="#" class="todoedit">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                |
                                <a href="#" class="tododelete redcolor">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </div>
                        </div>
                        <div class="todolist_list showactions">
                            <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                <div class="todoitemcheck">
                                    <input type="checkbox" class="striked" />
                                </div>
                                <div class="todotext todoitem">Team Out</div>
                            </div>
                            <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                <a href="#" class="todoedit">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                |
                                <a href="#" class="tododelete redcolor">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </div>
                        </div>
                        <div class="todolist_list showactions">
                            <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                <div class="todoitemcheck">
                                    <input type="checkbox" class="striked" />
                                </div>
                                <div class="todotext todoitem">Review On Sales</div>
                            </div>
                            <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                <a href="#" class="todoedit">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                |
                                <a href="#" class="tododelete redcolor">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </div>
                        </div>
                        <div class="todolist_list showactions">
                            <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                <div class="todoitemcheck">
                                    <input type="checkbox" class="striked" />
                                </div>
                                <div class="todotext todoitem">Meeting with Client</div>
                            </div>
                            <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                <a href="#" class="todoedit">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                |
                                <a href="#" class="tododelete redcolor">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </div>
                        </div>
                        <div class="todolist_list showactions">
                            <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                <div class="todoitemcheck">
                                    <input type="checkbox" class="striked" />
                                </div>
                                <div class="todotext todoitem">Analysis on Views</div>
                            </div>
                            <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                <a href="#" class="todoedit">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                |
                                <a href="#" class="tododelete redcolor">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </div>
                        </div>
                        <div class="todolist_list showactions">
                            <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                <div class="todoitemcheck">
                                    <input type="checkbox" class="striked" />
                                </div>
                                <div class="todotext todoitem">Seminar on Market</div>
                            </div>
                            <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                <a href="#" class="todoedit">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                |
                                <a href="#" class="tododelete redcolor">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </div>
                        </div>
                        <div class="todolist_list showactions">
                            <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                <div class="todoitemcheck">
                                    <input type="checkbox" class="striked" />
                                </div>
                                <div class="todotext todoitem">Business Review</div>
                            </div>
                            <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                <a href="#" class="todoedit">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                |
                                <a href="#" class="tododelete redcolor">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </div>
                        </div>
                        <div class="todolist_list showactions">
                            <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                <div class="todoitemcheck">
                                    <input type="checkbox" class="striked" />
                                </div>
                                <div class="todotext todoitem">Purchase Equipment</div>
                            </div>
                            <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                <a href="#" class="todoedit">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                |
                                <a href="#" class="tododelete redcolor">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </div>
                        </div>
                        <div class="todolist_list showactions">
                            <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                <div class="todoitemcheck">
                                    <input type="checkbox" class="striked" />
                                </div>
                                <div class="todotext todoitem">Meeting with CEO</div>
                            </div>
                            <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                <a href="#" class="todoedit">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                |
                                <a href="#" class="tododelete redcolor">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </div>
                        </div>
                        <div class="todolist_list showactions">
                            <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                <div class="todoitemcheck">
                                    <input type="checkbox" class="striked" />
                                </div>
                                <div class="todotext todoitem">Takeover Leads</div>
                            </div>
                            <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                <a href="#" class="todoedit">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                |
                                <a href="#" class="tododelete redcolor">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </div>
                        </div>
                    </form>
                    <div class="todolist_list adds">
                        <form role="form" id="main_input_box" class="form-inline">
                            <div class="form-group">
                                <label class="sr-only" for="AddTask">Add Task</label>
                                <input id="custom_textbox" name="Item" type="text" required placeholder="Add list item here" class="form-control" />
                            </div>
                            <input type="submit" value="Add Task" class="btn btn-primary add_button" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<!--  todolist-->
<script src="{{ asset('assets/js/todolist.js') }}"></script>
<!-- EASY PIE CHART JS -->
<script src="{{ asset('assets/vendors/charts/easypiechart.min.js') }}"></script>
<script src="{{ asset('assets/vendors/charts/jquery.easypiechart.min.js') }}"></script>
<!--for calendar-->
<script src="{{ asset('assets/vendors/fullcalendar/fullcalendar.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/vendors/fullcalendar/calendarcustom.min.js') }}" type="text/javascript"></script>
<!--   Realtime Server Load  -->
<script src="{{ asset('assets/vendors/charts/jquery.flot.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/vendors/charts/jquery.flot.resize.min.js') }}" type="text/javascript"></script>
<!--Sparkline Chart-->
<script src="{{ asset('assets/vendors/charts/jquery.sparkline.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendors/countUp/countUp.js') }}"></script>
<!--   maps -->
<script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('assets/js/dashboard.js') }}" type="text/javascript"></script>
<!-- end of page level js -->
<script type="text/javascript">
$(document).ready(function() {
    var composeHeight = $('#calendar').height() + 21 - $('.adds').height();
    $('.list_of_items').slimScroll({
        color: '#A9B6BC',
        height: composeHeight + 'px',
        size: '5px'
    });
});
</script>
@stop