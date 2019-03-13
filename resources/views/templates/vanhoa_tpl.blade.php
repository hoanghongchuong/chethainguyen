@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<div class="crumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('')}}">Trang chủ</a>
                </li>
                
                <li class="active">Ăn hóa trà</li>
            </ol>
        </div>
    </div>
</div>
<div class="content-home-cate">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-9">
                @foreach($tintuc as $item)
                <div class="box-item-news">
                    <div class="col-xs-12 col-md-3">
                        <a href="{{ url('van-hoa-tra/'.$item->alias.'.html') }}" title="{{$item->name}}"><img src="{{asset('upload/news/'.$item->photo)}}" alt="{{$item->name}}"></a>
                    </div>
                    <div class="col-xs-12 col-md-9">
                        <p class="name_news"><a href="{{ url('van-hoa-tra/'.$item->alias.'.html') }}" title="{{$item->name}}">{{$item->name}}</a>
                        </p>
                        <div class="des_news">
                            {!! $item->mota !!}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-xs-12 col-md-3">
                <h3 class="news_hot">Tin nổi bật</h3>
                <div class="list-hot-news">
                    @foreach($hot_news as $hot)
                    <p><a href="{{ url('van-hoa-tra/'.$hot->alias.'.html') }}" title="{{$hot->name}}">{{$hot->name}}</a></p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection