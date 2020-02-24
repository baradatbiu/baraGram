@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5" style="width: 50px">
            <img src="/img/main-avatar.jpg" alt="avatar" style="max-width: 100%" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23K</strong> followers</div>
                <div class="pr-5"><strong>212</strong> folowing</div>
            </div>
            <div class="pt-4 font-weight-bold">baradaGram.org</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis exercitationem minus, accusamus perferendis blanditiis pariatur eius. Nisi autem temporibus cum.</div>
            <div><a href="#">www.baradaGram.org</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="/img/vamp.jpg" alt="test-pic" class="w-100">
        </div>
        <div class="col-4">
            <img src="/img/vamp.jpg" alt="test-pic" class="w-100">
        </div>
        <div class="col-4">
            <img src="/img/vamp.jpg" alt="test-pic" class="w-100">
        </div>
    </div>
</div>
@endsection
