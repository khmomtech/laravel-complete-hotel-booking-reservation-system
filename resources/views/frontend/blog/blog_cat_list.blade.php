@extends('frontend.main_master')
@section('main')

    <!-- Inner Banner -->
    <div class="inner-banner inner-bg4">
        <div class="container">
            <div class="inner-title">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>Blog Style Two</li>
                </ul>
                <h3>Blog Style Two</h3>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Blog Style Area -->
    <div class="blog-style-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    
                    @foreach ($blog as $item ) 
                   
                    <div class="col-lg-12">
                        <div class="blog-card">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-4 p-0">
                                    <div class="blog-img">
                                        <a href="{{ url('blog/details/'.$item->post_slug) }}">
                                            <img src="{{ asset($item->post_image) }}" alt="Images">
                                        </a>
                                    </div>
                                </div>

                <div class="col-lg-7 col-md-8 p-0">
                    <div class="blog-content">
                <span>{{ $item->created_at->format('M d Y')  }}</span>
                        <h3>
                            <a href="{{ url('blog/details/'.$item->post_slug) }}">{{ $item->post_titile }}</a>
                        </h3>
                        <p>{{ $item->short_descp }}</p>
                        <a href="{{ url('blog/details/'.$item->post_slug) }}" class="read-btn">
                            Read More
                        </a>
                    </div>
                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                

                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area">
                            <a href="#" class="prev page-numbers">
                                <i class='bx bx-chevrons-left'></i>
                            </a>

                            <span class="page-numbers current" aria-current="page">1</span>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers">3</a>
                            
                            <a href="#" class="next page-numbers">
                                <i class='bx bx-chevrons-right'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="side-bar-wrap">
                        <div class="search-widget">
                            <form class="search-form">
                                <input type="search" class="form-control" placeholder="Search...">
                                <button type="submit">
                                    <i class="bx bx-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="services-bar-widget">
                            <h3 class="title">Blog Category</h3>
                            <div class="side-bar-categories">
                                <ul>
                                    <li>
                                        <a href="#">Conference Rooms Related</a>
                                    </li>
                                    <li>
                                        <a href="#">Hotel Rooms Related</a>
                                    </li>
                                    <li>
                                        <a href="#">Resort Reservation Related</a>
                                    </li>
                                    <li>
                                        <a href="#">Weeding Hall Related</a>
                                    </li>
                                    <li>
                                        <a href="#">Community Centre Related</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="side-bar-widget">
                            <h3 class="title">Recent Posts</h3>
                            <div class="widget-popular-post">
                                <article class="item">
                                    <a href="blog-details.html" class="thumb">
                                        <span class="full-image cover bg1" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <h4 class="title-text">
                                            <a href="blog-details.html">
                                                Hotel Room Reservation is a Common Fact Now
                                            </a>
                                        </h4>
                                        <ul>
                                            <li>
                                                <i class='bx bx-user'></i>
                                                29K
                                            </li>
                                            <li>
                                                <i class='bx bx-message-square-detail'></i>
                                                15K
                                            </li>
                                        </ul>
                                    </div>
                                </article>

                                <article class="item">
                                    <a href="blog-details.html" class="thumb">
                                        <span class="full-image cover bg2" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <h4 class="title-text">
                                            <a href="blog-details.html">
                                                We Can Easily Make a Good Hotel Management
                                            </a>
                                        </h4>
                                        <ul>
                                            <li>
                                                <i class='bx bx-user'></i>
                                                49K
                                            </li>
                                            <li>
                                                <i class='bx bx-message-square-detail'></i>
                                                17K
                                            </li>
                                        </ul>
                                    </div>
                                </article>

                                <article class="item">
                                    <a href="news-details.html" class="thumb">
                                        <span class="full-image cover bg3" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <h4 class="title-text">
                                            <a href="news-details.html">
                                                Hotel Management Has Made a New Goal
                                            </a> 
                                        </h4>
                                        <ul>
                                            <li>
                                                <i class='bx bx-user'></i>
                                                69K
                                            </li>
                                            <li>
                                                <i class='bx bx-message-square-detail'></i>
                                                52K
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                        </div>

                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Style Area End -->





@endsection