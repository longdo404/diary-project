@extends('layouts.frontend.themes.master')
@section('content')
<div class="col-md-offset-2 col-md-8 col-sm-12" >
    <div >
        <ul class="timeline">
            <li class="time-label">
                <span class="bg-orange">See Our Timeline
                </span>
                <br />
                <br />
            </li>

            <li class="time-label">
                <span class="bg-light-blue"> Year 2014
                </span>
            </li>

            <li>
                <i class="fa fa-envelope bg-blue"></i>
                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i>20 Feburary</span>
                    <h3 class="timeline-header"><a href="#">Sed accumsan</a> hendrerit metus</h3>
                    <div class="timeline-body">
                        Sed accumsan venenatis blandit. Duis auctor hendrerit metus
                    </div>
                    <div class='timeline-footer'>
                        <a class="btn btn-primary btn-xs">Share</a>
                        <a class="btn btn-danger btn-xs">Read More</a>
                    </div>
                </div>
            </li>

            <li>
                <i class="fa fa-user bg-aqua"></i>
                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i>02 January</span>
                    <h3 class="timeline-header no-border"><a href="#">Venenatis blandit.</a>  Duis auctor hendrerit metus</h3>
                </div>
            </li>

            <li class="time-label">
                <span class="bg-green"> Year 2013
                </span>
            </li>

            <li>
                <i class="fa fa-camera bg-purple"></i>
                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i>20 December</span>
                    <h3 class="timeline-header"><a href="#">Blandit</a> New Photo Show</h3>
                    <div class="timeline-body">
                        <img src="img/imgS1.jpg" alt="" class='margin' />
                        <img src="img/imgS2.jpg" alt="" class='margin' />
                    </div>
                </div>
            </li>

            <li>
                <i class="fa fa-video-camera bg-maroon"></i>
                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i>15 June</span>
                    <h3 class="timeline-header"><a href="#">Venenatis blandit</a> New Event</h3>
                    <div class="timeline-body">
                        <iframe width="300" height="169" src="//www.youtube.com/embed/Ycv5fNd4AeM"></iframe>
                    </div>
                </div>
            </li>
              <li>
                <i class="fa fa-envelope bg-blue"></i>
                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i>20 Feburary</span>
                    <h3 class="timeline-header"><a href="#">Sed accumsan</a> hendrerit metus</h3>
                    <div class="timeline-body">
                        Sed accumsan venenatis blandit. Duis auctor hendrerit metus
                    </div>
                    <div class='timeline-footer'>
                        <a class="btn btn-primary btn-xs">Share</a>
                        <a class="btn btn-danger btn-xs">Read More</a>
                    </div>
                </div>
            </li>
              <li>
                <i class="fa fa-flask bg-blue"></i>
                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i>20 Feburary</span>
                    <h3 class="timeline-header"><a href="#">Sed accumsan</a> hendrerit metus</h3>
                    <div class="timeline-body">
                        Sed accumsan venenatis blandit. Duis auctor hendrerit metus
                    </div>
                    <div class='timeline-footer'>
                        <a class="btn btn-primary btn-xs">Share</a>
                        <a class="btn btn-danger btn-xs">Read More</a>
                    </div>
                </div>
            </li>
            <li>
                <i class="fa fa-clock-o"></i>
            </li>
        </ul>
    </div>
</div>
@stop