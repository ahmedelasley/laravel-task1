@extends('layouts.app')

@section('content')

    <!-- <section class="container">
        <div class="row py-lg-5">
            <div class="col-xxl-8 px-4">
                <div class="row flex-lg-row-reverse align-items-center g-5">
                        <div class="col-10 col-sm-8 col-lg-6">
                            <img src="{{ URL::asset('https://via.placeholder.com/1080x720.png/007799?text=Laravel Task') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                            
                        </div>
                        <div class="col-lg-6">
                            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Responsive left-aligned hero with image</h1>
                            <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                            </div>
                        </div>
                </div>
            </div>
            </div>
        </div>
    </section> -->

    <div class="album py-5 bg-body-tertiary">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                @forelse ($news as $new)
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ URL::asset($new->picture) }}" class="bd-placeholder-img card-img-top" alt="Bootstrap Themes" width="100%" height="225" loading="lazy">

                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title">{{ \Str::substr($new->title, 0, 25) }} ......</h5>
                                <small class="text-body-secondary">{{ Carbon\Carbon::parse($new->created_at)->diffForHumans()  }} </small>
                            </div>
                            <p class="card-text text-justify">
                                {{ \Str::substr($new->details, 0, 200) }} ......
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('news.show', ['slug' => $new->slug ]) }}" class="btn btn-sm btn-outline-secondary">Read</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                @endforelse

            </div>

            <div class="d-flex flex-row justify-content-around mt-5">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        {{ $news->withQueryString()->onEachSide(0)->links() }} 
                    </ul>
                </nav>
            </div>
        </div>
    </div>

@endsection
