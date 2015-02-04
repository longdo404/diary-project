@extends('layouts.frontend.themes.master')
@section('content')
<div class="col-md-3">
    <div class="panel panel-default">
        <div class="panel-heading"><b>Entry đã viết</b></div>
        <ul class="list-group">
            <a class="list-group-item" href="#">
                <b class="link-forty">Cras justo odio</b>
                <br>
                <small style="text-algin:right;" class="list-group-item-text">Wednesday, Feb 4, 2015</small>
            </a>
            <a class="list-group-item" href="#">
                <b class="link-forty">Cras justo odio</b>
                <br>
                <small style="text-algin:right;" class="list-group-item-text">Wednesday, Feb 4, 2015</small>
            </a>
            <a class="list-group-item" href="#">
                <b class="link-forty">Cras justo odio</b>
                <br>
                <small style="text-algin:right;" class="list-group-item-text">Wednesday, Feb 4, 2015</small>
            </a>
            <a class="list-group-item" href="#">
                <b class="link-forty">Cras justo odio</b>
                <br>
                <small style="text-algin:right;" class="list-group-item-text">Wednesday, Feb 4, 2015</small>
            </a>
        </ul>
    </div>
</div>
<div class="col-md-9">
    <div class="panel panel-default">
        <div class="panel-body content-diary">
            <div class="post-title">
                <textarea class="h1 input-clear" rows="1" style="height: 32px;" placeholder="Untitled Entry"></textarea>
                <div class="sync">
                    <a class="save">Save now</a>
                </div>
            </div>
            <div class="post-content">
                <textarea class="ckeditor" id="diary" name="content" rows="100"></textarea>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
CKEDITOR.replace( 'content',
{
    height: 500
});
</script>
@stop