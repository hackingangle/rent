@extends('layout')

@section('body')
<div class="title">作者</div>
@if (empty($auths))
    <p>作者信息尚未添加</p>
@endif
<div>
    <ul>
        @foreach ($auths as $auth)
            <li>{{ $auth }}</li>
        @endforeach
    </ul>
</div>
@stop


@section('footer')
<script>
    alert('this is about page.');
</script>
@stop
