@extends('layouts.master')

@section('title', 'Blog')

@section('content')
<section id="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <h1>Learn Blog</h1>
                    <p class="lead boxed ">Ex utamur fierent tacimates duis choro an</p>
                    <p class="lead">
                        Lorem ipsum dolor sit amet, ius minim gubergren ad. At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix.
                    </p>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
        <div class="divider_top"></div>
        </section><!-- End sub-header -->
        <section id="main_content">
        <div class="container">
        <ol class="breadcrumb">
          <li><a href="/">Home</a></li>
          <li class="active">Active page</li>
        </ol>
             <div class="row">
             <aside class="col-md-4">
                 <div class=" box_style_1">
                        <div class="widget" style="margin-top:15px;">
                                <form action="#" method="POST">
                                <div class="input-group">
                                    @csrf
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button" style="margin-left:0;"><i class="icon-search"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                                </form>
                        </div><!-- End Search -->
                        <div class="widget">
                            <h4>Text widget</h4>
                            <p>
                                 Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            </p>
                        </div><!-- End widget -->
                        <div class="widget">
                            <h4>Recent post</h4>
                            <ul class="recent_post">
                                <li>
                                <i class="icon-calendar-empty"></i> 16th July, 2020
                                <div><a href="#">It is a long established fact that a reader will be distracted </a></div>
                                </li>
                                <li>
                                <i class="icon-calendar-empty"></i> 16th July, 2020
                                <div><a href="#">It is a long established fact that a reader will be distracted </a></div>
                                </li>
                                <li>
                                <i class="icon-calendar-empty"></i> 16th July, 2020
                                <div><a href="#">It is a long established fact that a reader will be distracted </a></div>
                                </li>
                            </ul>
                        </div><!-- End widget -->
                        <div class="widget tags add_bottom_30">
                            <h4>Tags</h4>
                            <a href="#">Lorem ipsum</a>
                            <a href="#">Dolor</a>
                            <a href="#">Long established</a>
                            <a href="#">Sit amet</a>
                            <a href="#">Latin words</a>
                            <a href="#">Excepteur sint</a>
                        </div><!-- End widget -->
                    </div><!-- End box-sidebar -->
             </aside><!-- End aside -->
             <div class="col-md-8">
                     <div class="post">
                     <a href="#" title="single_post.html"><img src="{{ asset('img/blog-3.jpg') }}" alt="Single Blog" class="img-responsive"></a>
                            <div class="post_info clearfix">
                                <div class="post-left">
                                    <ul>
                                        <li><i class="icon-calendar-empty"></i>On <span>12 Nov 2020</span></li>
                                        <li><i class="icon-user"></i>By <a href="#">John Smith</a></li>
                                        <li><i class="icon-tags"></i>Tags <a href="#">Works</a> <a href="#">Personal</a></li>
                                    </ul>
                                </div>
                                <div class="post-right"><i class="icon-comment"></i><a href="#">25 </a>Comments</div>
                            </div>
                            <h2>
                                {{-- Individual Post -- TODO --}}
                                <a href="#" title="blog Post">Duis aute irure dolor in reprehenderit</a>
                            </h2>
                            <p>
                                Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.....
                            </p>
                            {{-- CTA to Individual Post --}}
                            <a href="#" class="button_medium" title="blog Post">Read more</a>
                        </div><!-- end post -->
                        <div class="post">
                        <a href="#" title="blog Post"><img src="{{ asset('img/blog-1.jpg') }}" alt="Blog Image Responsive" class="img-responsive"></a>
                            <div class="post_info clearfix">
                                <div class="post-left">
                                    <ul>
                                        <li><i class="icon-calendar-empty"></i>On <span>12 Nov 2020</span></li>
                                        <li><i class="icon-user"></i>By <a href="#">John Smith</a></li>
                                        <li><i class="icon-tags"></i>Tags <a href="#">Works</a> <a href="#">Personal</a></li>
                                    </ul>
                                </div>
                                <div class="post-right"><i class="icon-comment"></i><a href="#">25 </a>Comments</div>
                            </div>
                            <h2>
                                {{-- LINK TO INDIVIDUAL POST --}}
                                <a href="#" title="blog post">Duis aute irure dolor in reprehenderit</a>
                            </h2>
                            <p>
                                Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.....
                            </p>
                            {{-- CTA -- INDIVIDUAL POST --}}
                            <a href="#" class="button_medium">Read more</a>
                        </div><!-- end post -->
                        <div class="post">
                            {{-- TODO - IMAGE LINK TO INDIVIDUAL BLOG --}}
                            <a href="#" title="blog post">
                            <img src="{{ asset('img/blog-2.jpg') }}" alt="Blog Image" class="img-responsive">
                            </a>
                            <div class="post_info clearfix">
                                <div class="post-left">
                                    <ul>
                                        <li><i class="icon-calendar-empty"></i>On <span>12 Nov 2020</span></li>
                                        <li><i class="icon-user"></i>By <a href="#">John Smith</a></li>
                                        <li><i class="icon-tags"></i>Tags <a href="#">Works</a> <a href="#">Personal</a></li>
                                    </ul>
                                </div>
                                <div class="post-right"><i class="icon-comment"></i><a href="#">25 </a>Comments</div>
                            </div>
                            <h2>
                                {{-- TODO -- LINK TO INDIVIDUAL POST --}}
                                <a href="#" title="blog post">Duis aute irure dolor in reprehenderit</a>
                            </h2>
                            <p>
                                Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.....
                            </p>
                            {{-- TODO -- LINK TO INDIVIDUAL POST --}}
                            <a href="#" class="button_medium" title="blog post">Read more</a>
                        </div><!-- end post -->
                        <hr>
                        <div class="text-center">
                            <ul class="pagination">
                                <li><a href="#">Prev</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">Next</a></li>
                            </ul><!-- end pagination-->
                        </div>
             </div><!-- End col-md-8-->
          </div>  <!-- End row-->
        </div><!-- End container -->
        </section><!-- End main_content-->

@endsection
