@extends('layouts.app')

@section('content')
    <div class="container mx-auto bg-white p-4 shadow">
        <div class="flex">
            <!-- Begin left column -->
            <div class="flex-1 mr-4">
              <carousel :per-page="1">
              @foreach($featuredArticles as $a)
                <slide>
                  <a class="no-underline" href="/article/{{$a->id}}">
                    <div class="black-overlay mb-3 h-96 p-4 relative bg-cover" style="background-image: url('{{asset($a->thumbnail)}}');">
                      <span class="absolute z-50 pin-b font-title uppercase text-white text-4xl mb-4 flex">{{$a->title}}</span>
                    </div>
                  </a>
                </slide>
              @endforeach
              </carousel>
              @foreach($articles as $a)
                <a class="no-underline" href="/article/{{$a->id}}">
                  <div class="black-overlay bg-test h-32 p-4 mb-4 bg-cover" style="background-image: url('{{asset($a->thumbnail)}}');">
                      <span class="absolute z-50 pin-b font-title uppercase text-white mb-4 text-2xl flex">{{$a->title}}</span>
                  </div>
                </a>
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