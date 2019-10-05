@extends('layouts.app')


@section('content')

  <div class="row">

    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs author-info">
      <div class="card ">
        <div class="card-body">
          <div class="text-center">
            作者：
          </div>
          <hr>
          <div class="media">
            <div align="center">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 topic-content">
      <div class="card">
        <div class="card-body">
          <h1 class="text-center mt-3 mb-3">
          </h1>

          <div class="article-meta text-center text-secondary">
            ⋅
            <i class="far fa-comment"></i>
          </div>

          <div class="topic-body mt-4 mb-4">
          </div>


        </div>
      </div>

      {{-- 用户回复列表 --}}
      <div class="card topic-reply mt-4">
        <div class="card-body">
          @include('shared._error')

          <div class="reply-box">
            <form action="{{ route('private_letters.store') }}" method="POST" accept-charset="UTF-8">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <textarea class="form-control" rows="3" placeholder="" name="content"></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-share mr-1"></i> 私聊</button>
            </form>
          </div>
          <hr>

        </div>
      </div>

    </div>
  </div>
@stop
