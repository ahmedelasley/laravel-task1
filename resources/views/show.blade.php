@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="mb-4 rounded">
        <img src="{{ URL::asset($new->picture) }}" class="bd-placeholder-img" alt="Bootstrap Themes" width="100%" height="300" loading="lazy">

        </div>




        <div class="row">
            <div class="col-md-8">
                <h2 class="pb-4 mb-4 fst-italic border-bottom">
                    {{ $new->title }}
                </h2>

                <article class="blog-post">
                    <!-- <h2 class="display-5 link-body-emphasis mb-1">Sample blog post</h2> -->
                    <p class="blog-post-meta">{{ Carbon\Carbon::parse($new->created_at)->diffForHumans()  }} by <a href="#">{{ $new->user->name }}</a></p>
                    <p>
                    {!! $new->details !!}
                    </p>
                </article>

            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-body-tertiary rounded">
                        <h4 class="fst-italic">About</h4>
                        <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
                    </div>

                    <div>
                        <h4 class="fst-italic">Recent posts</h4>
                        <ul class="list-unstyled">

                        @forelse ($news as $new)
                            <li>
                                <a href="{{ route('news.show', ['slug' => $new->slug ]) }}" class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top">
                                    <img src="{{ URL::asset($new->picture) }}" class="bd-placeholder-img" alt="Bootstrap Themes" width="100%" height="96" loading="lazy">

                                    <div class="col-lg-8">
                                        <h6 class="mb-0">{{ \Str::substr($new->title, 0, 25) }} ......</h6>
                                        <small class="text-body-secondary">{{ Carbon\Carbon::parse($new->created_at)->diffForHumans()  }}</small><br>
                                        <small class="">By {{ $new->user->name  }}</small>
                                    </div>
                                </a>
                            </li>

                        @empty
                        @endforelse

                        </ul>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection
