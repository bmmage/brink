@extends('layouts.app')

@section('content')
    <div class="container mx-auto bg-white p-4 shadow">
        <div class="flex">
            <!-- Begin left column -->
            <div class="flex-1 mr-4">
              <carousel :per-page="1">
              @foreach($featuredArticles as $a)
                <slide>
                  <div class="mb-3 items-center justify-center flex flex-col h-96 relative bg-cover" style="background-image: url('{{asset($a->thumbnail)}}');">
                    <a class="no-underline" href="/article/{{$a->id}}">
                      <span class="text-center font-title uppercase text-white text-4xl mb-4 flex">{{$a->title}}</span>
                    </a>
                  </div>
                </slide>
              @endforeach
              </carousel>
              @foreach($articles as $a)
                  <div class="bg-test items-center justify-center flex flex-col h-32 p-4 mb-4 bg-cover" style="background-image: url('{{asset($a->thumbnail)}}');">
                    <a class="no-underline" href="/article/{{$a->id}}">
                      <span class="text-center font-title uppercase text-white mb-4 text-2xl flex">{{$a->title}}</span>
                    </a>
                    <span class="font-title uppercase">
                      Posted in
                        @foreach($a->tags as $tag)
                          <a href="/tag/{{$tag->name}}" class="text-white no-underline">{{$tag->name}}</a>@if(!$loop->last),@endif
                        @endforeach
                        {{ $a->created_at->diffForHumans() }}
                    </span>
                  </div>
              @endforeach

              {{ $articles->links() }}
            </div>

            <!-- Begin Right column -->
            <div class="w-1/3 p-4">
              <span class="font-bold uppercase text-primary font-title mb-4 block">Streamers</span>
              @foreach($streamers as $s)
                <div class="streamer mb-2 bg-grey-lighter p-4">
                  <div class="flex">
                    <div class="flex-initial mr-4">
                      <img src="http://placehold.it/42x42" class="rounded-full" alt="">
                    </div>
                    <div class="flex-1">
                      <p>{{$s->name}}</p>
                      offline
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
        </div>
    </div>

@stop