@extends('master')
@section('content')
@foreach($detail as $detail)
	<!-- Event Detail Masterhead -->
	<section id="et-event-masthead" class="container-fluid position-relative img-overlay no-hover">
		<div class="container position-relative">
			<div class="mb-rev d-md-flex align-items-end">
				<div class="col-lg-5 col-md-6 col-sm-12">
					<div class="event-intro shadow bg-white">
						<h1 class="mb-4">{{$detail->name}} &nbsp;<i class="fas fa-check-circle text-green"></i></h1>
						<p class="description mb-4">
							{{$detail->description}}
						</p>
						<div class="d-md-flex justify-content-between">
							<div class="info">
								<div class="h6"><i class="icon-clock text-primary"></i>&nbsp; 29 Feb, 2020</div>
								<div class="mb-2"><i class="icon-contact"></i>&nbsp; Admin@eventro.com</div>
								<div class="text-primary"><i class="icon-phone"></i>&nbsp; 001 234 567 8</div>
							</div>
							<div class="time-left pt-2 pt-md-0">
								<div class="timer">
									<div class="days d-none"></div>
									<div class="hours"></div>
									<div class="minutes"></div>
									<div class="seconds"></div>
								</div>
							</div>
						</div>

						<div class='rating-widget mt-3'>
							<div class="star-rating d-inline-block mr-3">
								<i class="fa fa-star align-middle checked"></i>
								<i class="fa fa-star align-middle checked"></i>
								<i class="fa fa-star align-middle checked"></i>
								<i class="fa fa-star align-middle"></i>
								<i class="fa fa-star align-middle"></i>
							</div>
							<span class="badge badge-primary pointer position-absolute">4.3</span>
						</div>
					</div>
				</div>

				<div class="col-lg-7 col-md-6 col-sm-12 d-flex mb-2 flex-wrap pt-md-0 pt-3 align-items-end">
					<div class="align-items-md-end align-items-center flex-fill text-center d-sm-flex">
						<div class="event-features text-white">
							<div><span class="circle-icon text-primary bg-white"><i class="icon-quote"></i></span>23 Reviews</div>
							<div><span class="circle-icon text-primary bg-white"><i class="icon-eye"></i></span>33 views</div>
							<div><span class="circle-icon text-primary bg-white"><i class="fas fa-ticket-alt"></i></span>Tickets left: 839</div>
							<div><span class="circle-icon bg-green"><i class="fas fa-check text-white"></i></span>Running</div>
						</div>
						<div class="event-actions ml-auto">
							<span class="badge badge-primary pointer" data-toggle="tooltip" data-placement="top" title="Report"><i class="icon-maps-and-location"></i></span>
							<span class="badge badge-green pointer" data-toggle="tooltip" data-placement="top" title="Like"><i class="icon-heart"></i></span>
						</div>
					</div>
					<div class="mt-5 w-100 d-none d-md-block">
						<p class="event-location d-inline-block m-0"><i class="icon-compass h3 align-middle"></i>&nbsp; 89 Hill Road, Folsome Street 3H California, US</p>
						<a href="#" class="float-right text-decoration-none text-primary">Get Directions <i class="fas fa-external-link-alt"></i></a>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<br>
		</div>
	</section>
	<!-- Content Area -->
	<section id="et-content" class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div id="scroll-tabs" class="scroll-tabs bg-light">
						<a class="nav-link d-inline-block bg-transparent rounded-0 text-reset p-3" id="scrollto-top" href="#et-event-masthead">All</a>
						<a class="nav-link d-inline-block bg-transparent rounded-0 text-reset p-3" id="scrollto-description" href="#data-description">Description</a>
						<a class="nav-link d-inline-block bg-transparent rounded-0 text-reset p-3" id="scrollto-schedule" href="#data-schedule">Schedule</a>
						<a class="nav-link d-inline-block bg-transparent rounded-0 text-reset p-3" id="scrollto-speakers" href="#data-speakers">Speakers</a>
						<a class="nav-link d-inline-block bg-transparent rounded-0 text-reset p-3" id="scrollto-gallery" href="#data-gallery">Gallery</a>
						<a class="nav-link d-inline-block bg-transparent rounded-0 text-reset p-3" id="scrollto-sponsors" href="#data-sponsors">Sponsors</a>
						<a class="nav-link d-inline-block bg-transparent rounded-0 text-reset p-3" id="scrollto-reviews" href="#data-reviews">Reviews</a>
					</div>

					<!-- Description -->
					<div id="data-description" class="event-description shadow rounded p-5 content-box mt-5">
						<h4 class="mb-4 font-weight-bold">Description</h4>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<p class="description mb-0">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>

					<!-- Schedule -->
					<div id="data-schedule" class="event-schedule shadow rounded p-5 content-box mt-5">
						<h4 class="mb-4 font-weight-bold">Schedule</h4>
						<div class="title-row mb-3">
							<strong>Day 1: &nbsp;</strong> Musical night with refreshment <span>&nbsp;&nbsp; <i class="icon-clock text-primary"></i> &nbsp; 03: 30pm </span>
						</div>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<hr>
						<div class="title-row mb-3">
							<strong>Day 1: &nbsp;</strong> Musical night with refreshment <span>&nbsp;&nbsp; <i class="icon-clock text-primary"></i> &nbsp; 03: 30pm </span>
						</div>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<hr>
						<div class="title-row mb-3">
							<strong>Day 1: &nbsp;</strong> Musical night with refreshment <span>&nbsp;&nbsp; <i class="icon-clock text-primary"></i> &nbsp; 03: 30pm </span>
						</div>
						<p class="description mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>

					<!-- Speakers -->
					<div id="data-speakers" class="event-Speakers shadow rounded p-5 content-box mt-5">
						<h4 class="mb-4 font-weight-bold">Speakers</h4>
						<div class="row">
							<div class="col-md-4">
								<div class="speaker position-relative">
									<img src="{{asset('img/speaker-1.jpg')}}" alt="speaker" class="img-fluid">
									<div class="content rounded shadow text-center p-2 w-75 m-auto bg-white transition position-relative">
										<h6>Eli Brek</h6>
										<p class="mb-0 small text-primary">Manager at UXF</p>
										<ul class="social position-absolute transition d-inline-block m-0 nostyle inline p-0">
											<li><a href="#" class="d-flex align-items-center justify-content-center text-decoration-none transition"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" class="d-flex align-items-center justify-content-center text-decoration-none transition"><i class="fab fa-google" aria-hidden="true"></i></a></li>
											<li><a href="#" class="d-flex align-items-center justify-content-center text-decoration-none transition"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#" class="d-flex align-items-center justify-content-center text-decoration-none transition"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
											<li><a href="#" class="d-flex align-items-center justify-content-center text-decoration-none transition"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="speaker position-relative">
									<img src="{{asset('img/speaker-2.jpg')}}" alt="speaker" class="img-fluid">
									<div class="content rounded shadow text-center p-2 w-75 m-auto bg-white transition position-relative">
										<h6>Feng Grom</h6>
										<p class="mb-0 small text-primary">Business Analyst</p>
										<ul class="social position-absolute transition d-inline-block m-0 nostyle inline p-0">
											<li><a href="#" class="d-flex align-items-center justify-content-center text-decoration-none transition"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" class="d-flex align-items-center justify-content-center text-decoration-none transition"><i class="fab fa-google" aria-hidden="true"></i></a></li>
											<li><a href="#" class="d-flex align-items-center justify-content-center text-decoration-none transition"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#" class="d-flex align-items-center justify-content-center text-decoration-none transition"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
											<li><a href="#" class="d-flex align-items-center justify-content-center text-decoration-none transition"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="speaker position-relative">
									<img src="{{asset('img/speaker-3.jpg')}}" alt="speaker" class="img-fluid">
									<div class="content rounded shadow text-center p-2 w-75 m-auto bg-white transition position-relative">
										<h6>Warry Heum</h6>
										<p class="mb-0 small text-primary">Technical officer</p>
										<ul class="social position-absolute transition d-inline-block m-0 nostyle inline p-0">
											<li><a href="#" class="d-flex align-items-center justify-content-center text-decoration-none transition"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" class="d-flex align-items-center justify-content-center text-decoration-none transition"><i class="fab fa-google" aria-hidden="true"></i></a></li>
											<li><a href="#" class="d-flex align-items-center justify-content-center text-decoration-none transition"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#" class="d-flex align-items-center justify-content-center text-decoration-none transition"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
											<li><a href="#" class="d-flex align-items-center justify-content-center text-decoration-none transition"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Gallery -->
					<div id="data-gallery" class="gallery-mason shadow rounded p-5 content-box mt-5">
						<h4 class="mb-4 font-weight-bold">Gallery</h4>
						<i class="icon-download prev pointer"></i>
						<i class="icon-download next pointer"></i>
						<div class="mason-container">
							<div class="image-box"><img src="https://picsum.photos/id/21/800" alt="img"></div>
							<div class="vertical image-box"><img src="https://picsum.photos/id/22/800/1000" alt="img"></div>
							<div class="horizontal image-box"><img src="https://picsum.photos/id/23/1400/800" alt="img"></div>
							<div class="big image-box"><img src="https://picsum.photos/id/26/800" alt="img"></div>
							<div class="image-box"><img src="https://picsum.photos/id/25/800" alt="img"></div>
							<div class="image-box"><img src="https://picsum.photos/id/24/800" alt="img"></div>
							<div class="image-box"><img src="https://picsum.photos/id/27/800" alt="img"></div>
						</div>
					</div>

					<!-- Event Sponsors -->
					<div id="data-sponsors" class="event-sponsors shadow rounded p-5 content-box mt-5">
						<h4 class="mb-4 font-weight-bold">Event Sponsors</h4>
						<img src="{{asset('img/sponsor-1.png')}}" alt="sponsor">
						<img src="{{asset('img/sponsor-2.png')}}" alt="sponsor">
						<img src="{{asset('img/sponsor-3.png')}}" alt="sponsor">
						<img src="{{asset('img/sponsor-4.png')}}" alt="sponsor">
						<img src="{{asset('img/sponsor-1.png')}}" alt="sponsor">
						<img src="{{asset('img/sponsor-2.png')}}" alt="sponsor">
						<img src="{{asset('img/sponsor-3.png')}}" alt="sponsor">
						<img src="{{asset('img/sponsor-4.png')}}" alt="sponsor">
					</div>

					<!-- Customer Reviews -->
					<div id="data-reviews" class="event-reviews shadow rounded p-5 content-box mt-5">
						<h4 class="mb-4 font-weight-bold">Reviews</h4>
						<!-- Comments -->
						<div class="post-comments">
							<!-- Comment -->
							<div class="user-comment border-bottom pb-1 mb-3">
								<div class="d-md-flex d-sm-block mb-2">
									<div class="commenter-thumbnail">
										<img src="{{asset('img/userthumb.jpg')}}" alt="comment" class="img-fluid rounded-pill">
									</div>
									<div class="comment-content">
										<h6>Joseph Bellistor - <span class="text-muted review-date small">26 Jun 2019 02:15</span> <i class="report-comment ml-3 pointer float-right text-muted fa fa-flag" data-toggle="tooltip" data-placement="top" title="Report"></i> <i class="reply-trigger pointer float-right text-muted fa fa-reply" data-toggle="tooltip" data-placement="top" title="Reply"></i></h6>
										<div class="star-rating d-inline-block mb-2">
											<i class="fa fa-star align-middle checked"></i>
											<i class="fa fa-star align-middle checked"></i>
											<i class="fa fa-star align-middle checked"></i>
											<i class="fa fa-star align-middle"></i>
											<i class="fa fa-star align-middle"></i>
										</div>
										<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										<div class="product-shots lightbox">
											<a href="" title="Caption for gallery item 3">
												<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
											</a>
											<a href="" title="Caption for gallery item 3">
												<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
											</a>
											<a href="img/post-1.jpg" title="Caption for gallery item 3">
												<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
											</a>
											<a href="img/post-1.jpg" title="Caption for gallery item 3">
												<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
											</a>
											<a href="img/post-1.jpg" title="Caption for gallery item 3">
												<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- /Comment -->

							<!-- Comment -->
							<div class="user-comment border-bottom pb-1 mb-3">
								<div class="d-md-flex d-sm-block mb-2">
									<div class="commenter-thumbnail">
										<img src="{{asset('img/userthumb.jpg')}}" alt="comment" class="img-fluid rounded-pill">
									</div>
									<div class="comment-content">
										<h6>Joseph Bellistor - <span class="text-muted review-date small">26 Jun 2019 02:15</span> <i class="report-comment ml-3 pointer float-right text-muted fa fa-flag" data-toggle="tooltip" data-placement="top" title="Report"></i> <i class="reply-trigger pointer float-right text-muted fa fa-reply" data-toggle="tooltip" data-placement="top" title="Reply"></i></h6>
										<div class="star-rating d-inline-block mb-2">
											<i class="fa fa-star align-middle checked"></i>
											<i class="fa fa-star align-middle checked"></i>
											<i class="fa fa-star align-middle checked"></i>
											<i class="fa fa-star align-middle"></i>
											<i class="fa fa-star align-middle"></i>
										</div>
										<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										<div class="product-shots lightbox">
											<a href="img/post-1.jpg" title="Caption for gallery item 3">
												<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
											</a>
											<a href="img/post-1.jpg" title="Caption for gallery item 3">
												<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
											</a>
											<a href="img/post-1.jpg" title="Caption for gallery item 3">
												<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
											</a>
											<a href="img/post-1.jpg" title="Caption for gallery item 3">
												<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
											</a>
											<a href="img/post-1.jpg" title="Caption for gallery item 3">
												<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
											</a>
										</div>
									</div>
								</div>
								<!-- Reply -->
								<div class="user-comment border-bottom mt-4 pb-1 mb-3">
									<div class="d-md-flex d-sm-block mb-2">
										<div class="commenter-thumbnail">
											<img src="{{asset('img/userthumb.jpg')}}" alt="comment" class="img-fluid rounded-pill">
										</div>
										<div class="comment-content">
											<h6>Joseph Bellistor - <span class="text-muted review-date small">26 Jun 2019 02:15</span> <i class="report-comment ml-3 pointer float-right text-muted fa fa-flag" data-toggle="tooltip" data-placement="top" title="Report"></i> <i class="reply-trigger pointer float-right text-muted fa fa-reply" data-toggle="tooltip" data-placement="top" title="Reply"></i></h6>
											<div class="star-rating d-inline-block mb-2">
												<i class="fa fa-star align-middle checked"></i>
												<i class="fa fa-star align-middle checked"></i>
												<i class="fa fa-star align-middle checked"></i>
												<i class="fa fa-star align-middle"></i>
												<i class="fa fa-star align-middle"></i>
											</div>
											<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
											<div class="product-shots lightbox">
												<a href="img/post-1.jpg" title="Caption for gallery item 3">
													<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
												</a>
												<a href="img/post-1.jpg" title="Caption for gallery item 3">
													<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
												</a>
												<a href="img/post-1.jpg" title="Caption for gallery item 3">
													<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
												</a>
												<a href="img/post-1.jpg" title="Caption for gallery item 3">
													<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
												</a>
												<a href="img/post-1.jpg" title="Caption for gallery item 3">
													<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
												</a>
											</div>
										</div>
									</div>
								</div>
								<!-- /Reply -->

								<!-- Reply -->
								<div class="user-comment mt-4 pb-1">
									<div class="d-md-flex d-sm-block mb-2">
										<div class="commenter-thumbnail">
											<img src="{{asset('img/userthumb.jpg')}}" alt="comment" class="img-fluid rounded-pill">
										</div>
										<div class="comment-content">
											<h6>Joseph Bellistor - <span class="text-muted review-date small">26 Jun 2019 02:15</span> <i class="report-comment ml-3 pointer float-right text-muted fa fa-flag" data-toggle="tooltip" data-placement="top" title="Report"></i> <i class="reply-trigger pointer float-right text-muted fa fa-reply" data-toggle="tooltip" data-placement="top" title="Reply"></i></h6>
											<div class="star-rating d-inline-block mb-2">
												<i class="fa fa-star align-middle checked"></i>
												<i class="fa fa-star align-middle checked"></i>
												<i class="fa fa-star align-middle checked"></i>
												<i class="fa fa-star align-middle"></i>
												<i class="fa fa-star align-middle"></i>
											</div>
											<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
											<div class="product-shots lightbox">
												<a href="img/post-1.jpg" title="Caption for gallery item 3">
													<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
												</a>
												<a href="img/post-1.jpg" title="Caption for gallery item 3">
													<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
												</a>
												<a href="img/post-1.jpg" title="Caption for gallery item 3">
													<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
												</a>
												<a href="img/post-1.jpg" title="Caption for gallery item 3">
													<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
												</a>
												<a href="img/post-1.jpg" title="Caption for gallery item 3">
													<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
												</a>
											</div>
										</div>
									</div>
								</div>
								<!-- /Reply -->
							</div>
							<!-- /Comment -->

							<!-- Comment -->
							<div class="user-comment border-bottom pb-1 mb-3">
								<div class="d-md-flex d-sm-block mb-2">
									<div class="commenter-thumbnail">
										<img src="{{asset('img/userthumb.jpg')}}" alt="comment" class="img-fluid rounded-pill">
									</div>
									<div class="comment-content">
										<h6>Joseph Bellistor - <span class="text-muted review-date small">26 Jun 2019 02:15</span> <i class="report-comment ml-3 pointer float-right text-muted fa fa-flag" data-toggle="tooltip" data-placement="top" title="Report"></i> <i class="reply-trigger pointer float-right text-muted fa fa-reply" data-toggle="tooltip" data-placement="top" title="Reply"></i></h6>
										<div class="star-rating d-inline-block mb-2">
											<i class="fa fa-star align-middle checked"></i>
											<i class="fa fa-star align-middle checked"></i>
											<i class="fa fa-star align-middle checked"></i>
											<i class="fa fa-star align-middle"></i>
											<i class="fa fa-star align-middle"></i>
										</div>
										<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										<div class="product-shots lightbox">
											<a href="img/post-1.jpg" title="Caption for gallery item 3">
												<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
											</a>
											<a href="img/post-1.jpg" title="Caption for gallery item 3">
												<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
											</a>
											<a href="img/post-1.jpg" title="Caption for gallery item 3">
												<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
											</a>
											<a href="img/post-1.jpg" title="Caption for gallery item 3">
												<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
											</a>
											<a href="img/post-1.jpg" title="Caption for gallery item 3">
												<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- /Comment -->

							<!-- Comment -->
							<div class="user-comment border-bottom pb-1 mb-3">
								<div class="d-md-flex d-sm-block mb-2">
									<div class="commenter-thumbnail">
										<img src="{{asset('img/userthumb.jpg')}}" alt="comment" class="img-fluid rounded-pill">
									</div>
									<div class="comment-content">
										<h6>Joseph Bellistor - <span class="text-muted review-date small">26 Jun 2019 02:15</span> <i class="report-comment ml-3 pointer float-right text-muted fa fa-flag" data-toggle="tooltip" data-placement="top" title="Report"></i> <i class="reply-trigger pointer float-right text-muted fa fa-reply" data-toggle="tooltip" data-placement="top" title="Reply"></i></h6>
										<div class="star-rating d-inline-block mb-2">
											<i class="fa fa-star align-middle checked"></i>
											<i class="fa fa-star align-middle checked"></i>
											<i class="fa fa-star align-middle checked"></i>
											<i class="fa fa-star align-middle"></i>
											<i class="fa fa-star align-middle"></i>
										</div>
										<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										<div class="product-shots lightbox">
											<a href="img/post-1.jpg" title="Caption for gallery item 3">
												<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
											</a>
											<a href="img/post-1.jpg" title="Caption for gallery item 3">
												<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
											</a>
											<a href="img/post-1.jpg" title="Caption for gallery item 3">
												<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
											</a>
											<a href="img/post-1.jpg" title="Caption for gallery item 3">
												<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
											</a>
											<a href="img/post-1.jpg" title="Caption for gallery item 3">
												<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- /Comment -->

							<!-- Comment -->
							<div class="user-comment">
								<div class="d-md-flex d-sm-block mb-2">
									<div class="commenter-thumbnail">
										<img src="{{asset('img/userthumb.jpg')}}" alt="comment" class="img-fluid rounded-pill">
									</div>
									<div class="comment-content">
										<h6>Joseph Bellistor - <span class="text-muted review-date small">26 Jun 2019 02:15</span> <i class="report-comment ml-3 pointer float-right text-muted fa fa-flag" data-toggle="tooltip" data-placement="top" title="Report"></i> <i class="reply-trigger pointer float-right text-muted fa fa-reply" data-toggle="tooltip" data-placement="top" title="Reply"></i></h6>
										<div class="star-rating d-inline-block mb-2">
											<i class="fa fa-star align-middle checked"></i>
											<i class="fa fa-star align-middle checked"></i>
											<i class="fa fa-star align-middle checked"></i>
											<i class="fa fa-star align-middle"></i>
											<i class="fa fa-star align-middle"></i>
										</div>
										<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										<div class="product-shots lightbox">
											<a href="img/post-1.jpg" title="Caption for gallery item 3">
												<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
											</a>
											<a href="img/post-1.jpg" title="Caption for gallery item 3">
												<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
											</a>
											<a href="img/post-1.jpg" title="Caption for gallery item 3">
												<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
											</a>
											<a href="img/post-1.jpg" title="Caption for gallery item 3">
												<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
											</a>
											<a href="img/post-1.jpg" title="Caption for gallery item 3">
												<img src="{{asset('img/post-1.jpg')}}" width="50" alt="img" class="img-fluid mb-2 mr-2">
											</a>
										</div>
									</div>
								</div>
							</div>
							<hr>
							<!-- /Comment -->
							<a href="#" class="d-block text-center text-primary">View More</a>
						</div>
						<!-- /Comments -->
					</div>

					<div class="event-comment-form shadow rounded p-5 content-box mt-5">
						<h4 class="mb-4 font-weight-bold">Add Review</h4>
						<div class="post-comment-form">
							<form autocomplete="off">
								<div class="row">
									<div class="form-group col-md-12 col-sm-12">
										<div class="fake-file-upload rounded-pill transition-1 d-flex align-items-center justify-content-center p-3 text-center text-muted position-relative">
											<input type="file" name="file_upload" class="position-absolute pointer" multiple>
											<i class="fas fa-cloud-upload-alt h3 m-0"></i>&nbsp; Choose images
										</div>
									</div>
									<div class="form-group col-md-6 col-sm-12">
										<input type="text" class="form-control bg-light" placeholder="Name" name="name">
									</div>
									<div class="form-group col-md-6 col-sm-12">
										<input type="text" class="form-control bg-light" placeholder="Email address" name="email">
									</div>
									<div class="form-group col-sm-12">
										<textarea rows="6" class="form-control resize-none bg-light" placeholder="Type your comment" name="comment"></textarea>
									</div>
								</div>

								<!-- Add rating -->
								<div class="rating-types flex-wrap d-md-flex d-block pt-3">
									<div class="rating-span mb-3">
										<strong>4.5</strong>
										<div class="rating-tooltip pl-3 pr-3 pt-2 pb-2 rounded-pill d-inline-block">
											<strong>Food &nbsp;</strong>
											<div class="star-rating d-inline-block">
												<i class="fa fa-star align-middle checked"></i>
												<i class="fa fa-star align-middle checked"></i>
												<i class="fa fa-star align-middle checked"></i>
												<i class="fa fa-star align-middle"></i>
												<i class="fa fa-star align-middle"></i>
											</div>
										</div>
									</div>

									<div class="rating-span mb-3">
										<strong>4.5</strong>
										<div class="rating-tooltip pl-3 pr-3 pt-2 pb-2 rounded-pill d-inline-block">
											<strong>Ambience &nbsp;</strong>
											<div class="star-rating d-inline-block">
												<i class="fa fa-star align-middle checked"></i>
												<i class="fa fa-star align-middle checked"></i>
												<i class="fa fa-star align-middle checked"></i>
												<i class="fa fa-star align-middle"></i>
												<i class="fa fa-star align-middle"></i>
											</div>
										</div>
									</div>

									<div class="rating-span mb-3">
										<strong>4.5</strong>
										<div class="rating-tooltip pl-3 pr-3 pt-2 pb-2 rounded-pill d-inline-block">
											<strong>Service &nbsp;</strong>
											<div class="star-rating d-inline-block">
												<i class="fa fa-star align-middle checked"></i>
												<i class="fa fa-star align-middle checked"></i>
												<i class="fa fa-star align-middle checked"></i>
												<i class="fa fa-star align-middle"></i>
												<i class="fa fa-star align-middle"></i>
											</div>
										</div>
									</div>

									<div class="rating-span mb-3">
										<strong>4.5</strong>
										<div class="rating-tooltip pl-3 pr-3 pt-2 pb-2 rounded-pill d-inline-block">
											<strong>Value &nbsp;</strong>
											<div class="star-rating d-inline-block">
												<i class="fa fa-star align-middle checked"></i>
												<i class="fa fa-star align-middle checked"></i>
												<i class="fa fa-star align-middle checked"></i>
												<i class="fa fa-star align-middle"></i>
												<i class="fa fa-star align-middle"></i>
											</div>
										</div>
									</div>
								</div>
								<!-- /Add rating -->

								<div class="position-relative border-0 mt-md-0 mt-3 btn btn-primary submit-btn">
									<i class="icon-login btn-icon input-icon"></i> Submit Review
									<input type="submit" class="h-100 w-100 position-absolute" value="Submit Review">
								</div>
							</form>
						</div>
						<!-- /Comment form -->
					</div>
				</div>

				<div class="col-lg-4">
					<div class="et-sidebar">
						<!-- Map -->
						<div class="side-widget w-100 map shadow rounded p-4">
							<h4 class="box-heading mb-5 position-relative mb-0">Event location</h4>
							<div id="loadmaps" class="w-100 mb-3"></div>
							<label>Social media: </label>
							<ul class="social d-inline-block m-0 nostyle inline p-0">
								<li><a href="#" class="d-flex align-items-center justify-content-center border text-decoration-none transition"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="d-flex align-items-center justify-content-center border text-decoration-none transition"><i class="fab fa-google" aria-hidden="true"></i></a></li>
								<li><a href="#" class="d-flex align-items-center justify-content-center border text-decoration-none transition"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#" class="d-flex align-items-center justify-content-center border text-decoration-none transition"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
								<li><a href="#" class="d-flex align-items-center justify-content-center border text-decoration-none transition"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
							<hr>
							<label>Website: </label> <a href="#" class="text-primary text-decoration-none">https://www.event.com <i class="fas fa-external-link-alt"></i></a>
						</div>

						<!-- Amenities -->
						<div class="side-widget w-100 amenities shadow rounded p-4 mt-5">
							<h4 class="box-heading mb-5 position-relative mb-0">Amenities</h4>
							<ul class="p-0 m-0 nostyle">
								<li class="mb-4 mt-2"><i class="fas fa-wheelchair text-primary"></i>&nbsp; Wheel-chair Access <i class="text-green mt-1 fas fa-check float-right"></i></li>
								<li class="mb-4 mt-2"><i class="fas fa-smoking-ban text-primary"></i>&nbsp; Smoking Allowed <i class="text-primary mt-1 fas fa-times float-right"></i></li>
								<li class="mb-4 mt-2"><i class="fas fa-bookmark text-primary"></i>&nbsp; Advance booking <i class="text-primary mt-1 fas fa-times float-right"></i></li>
								<li class="mb-4 mt-2"><i class="fas fa-person-booth text-primary"></i>&nbsp; Waiting room <i class="text-green mt-1 fas fa-check float-right"></i></li>
								<li class="mt-2"><i class="fas fa-wind text-primary"></i>&nbsp; Airconditioner <i class="text-green mt-1 fas fa-check float-right"></i></li>
							</ul>
						</div>

						<!-- Hosted by -->
						<div class="side-widget w-100 hosted-by shadow rounded p-4 mt-5">
							<h4 class="box-heading mb-5 position-relative mb-0">Hosted By</h4>
							<img src="img/author-1.jpg" class="rounded-pill shadow d-inline-block" alt="author">
							<div class="d-inline-block position-relative align-middle pl-2">
								<span>Nick Foley</span>
								<p class="description position-relative small mb-2">Operational Manager</p>
								<a href="#" class="badge badge-primary host-contact position-absolute show-host-info border-0 font-weight-normal">Contact</a>
								<div class="position-absolute custom-tooltip host-info shadow bg-white p-3 rounded">
									<span class="d-flex align-items-center">
										<i class="icon-contact text-primary pr-2"></i> Business@web.com
									</span>
									<hr>
									<span class="d-flex align-items-center">
										<i class="icon-phone text-primary pr-2"></i> +12 345 678 9 0
									</span>
								</div>
							</div>
						</div>

						<!-- Get a seat -->
						<div class="side-widget w-100 reservation shadow rounded p-4 mt-5">
							<h4 class="box-heading mb-5 position-relative mb-0">Get a Seat</h4>
							<p class="text-primary"> <i class="fas fa-exclamation-triangle"></i> Only <span class="text-secondary">20</span> seats left</p>
							<form autocomplete="off">
								<div class="form-group">
									<div class="form-group position-relative">
										<input size="16" type="text" value="2012-06-15 14:45" readonly class="form-control bg-light form_datetime">
										<i class="icon-clock input-icon"></i>
									</div>
								</div>
								<div class="form-group">
									<input type="text" class="form-control bg-light" placeholder="Name" name="name">
								</div>
								<div class="form-group">
									<input type="text" class="form-control bg-light" placeholder="Email address" name="email">
								</div>
								<div class="form-group">
									<input type="number" id="txtAtten" onmouseup="myFunction()" onkeyup ="myFunction()" class="form-control bg-light" value="0" placeholder="Number of attendees" name="attendees">
								</div>
								<div class="form-group">
									<input type="number" class="form-control bg-light" placeholder="Phone" name="phone">
								</div>
								<div class="form-group text-center">
									<p>Choose ticket type</p>
									<div class="price-plans">
										<input type="hidden" name="selectedTicketPrice" id="selectedTicketPrice">
										@foreach($ticket as $ticket)
										<div onclick="getSeletedTicket({{$ticket->price}})" class="price-plan pointer transition border rounded position-relative" data-toggle="tooltip" data-placement="bottom" title="3rd Row, No Refreshment, No Smoking">
											<span class="position-absolute m-auto d-flex align-items-center justify-content-center text-primary font-weight-bold text-center bg-white shadow rounded-pill">{{$ticket->price}}</span>
											<input type="hidden" name="ticketPrice" id="ticketPrice" value='{{$ticket->price}}'>
											<label>{{$ticket->type}}</label>
										</div>
										@endforeach
									</div>
									<p><strong>Total:</strong> <span id="txtTotal" class="text-primary">$0</span></p>
								</div>
								<div class="text-center">
									<div class="position-relative border-0 mt-md-0 mt-3 btn btn-primary submit-btn">
										<i class="fas fa-credit-card btn-icon input-icon"></i> Pay now
										<input type="submit" class="h-100 w-100 position-absolute" value="Submit Review">
									</div>
								</div>
							</form>
						</div>

						<!-- General enquiry -->
						<div class="side-widget w-100 enquiry shadow rounded p-4 mt-5">
							<h4 class="box-heading mb-5 position-relative mb-0">General enquiry</h4>
							<form autocomplete="off">
								<div class="form-group">
									<input type="text" class="form-control bg-light" placeholder="Name" name="name">
								</div>
								<div class="form-group">
									<input type="text" class="form-control bg-light" placeholder="Email address" name="email">
								</div>
								<div class="form-group">
									<input type="text" class="form-control bg-light" placeholder="Phone" name="phone">
								</div>
								<div class="form-group">
									<textarea name="message" class="form-control bg-light" placeholder="Your message" rows="6" cols="80"></textarea>
								</div>
								<div class="text-center">
									<div class="position-relative border-0 mt-md-0 mt-3 btn btn-primary submit-btn">
										<i class="icon-login btn-icon input-icon"></i> Submit
										<input type="submit" class="h-100 w-100 position-absolute" value="Submit Review">
									</div>
								</div>
							</form>
						</div>

						<!-- Sponsored Events -->
						<div class="side-widget w-100 sponsored-events shadow rounded p-4 mt-5">
							<h4 class="box-heading mb-5 position-relative mb-0">Sponsored Events</h4>
							<a href="#" class="eventbox text-decoration-none text-reset d-block">
								<div class="img-overlay position-relative overlay-hidden rounded-top">
									<span class="badge badge-primary mt-2 ml-2 text-white position-absolute border-0 font-weight-normal">Sponsored</span>
									<img src="img/event-grid-1.jpg" class="img-fluid rounded-top" alt="Event">
								</div>
								<div class="bg-white p-3 shadow rounded-bottom">
									<p class="h6">Grand Workshop</p>
									<div class='rating-stars'>
										<ul id='stars' class="d-inline-block">
											<li class='star selected' title='Poor' data-value='1'>
												<i class='fa fa-star fa-fw'></i>
											</li>
											<li class='star selected' title='Fair' data-value='2'>
												<i class='fa fa-star fa-fw'></i>
											</li>
											<li class='star selected' title='Good' data-value='3'>
												<i class='fa fa-star fa-fw'></i>
											</li>
											<li class='star' title='Excellent' data-value='4'>
												<i class='fa fa-star fa-fw'></i>
											</li>
											<li class='star' title='WOW!!!' data-value='5'>
												<i class='fa fa-star fa-fw'></i>
											</li>
										</ul>
										<span class="badge badge-primary">4.3</span>
									</div>
								</div>
							</a>
							<a href="#" class="eventbox text-decoration-none text-reset d-block mt-3">
								<div class="img-overlay position-relative overlay-hidden rounded-top">
									<span class="badge badge-primary mt-2 ml-2 text-white position-absolute border-0 font-weight-normal">Ad</span>
									<img src="img/event-grid-2.jpg" class="img-fluid rounded-top" alt="Event">
								</div>
								<div class="bg-white p-3 shadow rounded-bottom">
									<p class="h6">Auto Show</p>
									<div class='rating-stars'>
										<ul id='stars_1' class="d-inline-block">
											<li class='star selected' title='Poor' data-value='1'>
												<i class='fa fa-star fa-fw'></i>
											</li>
											<li class='star selected' title='Fair' data-value='2'>
												<i class='fa fa-star fa-fw'></i>
											</li>
											<li class='star selected' title='Good' data-value='3'>
												<i class='fa fa-star fa-fw'></i>
											</li>
											<li class='star' title='Excellent' data-value='4'>
												<i class='fa fa-star fa-fw'></i>
											</li>
											<li class='star' title='WOW!!!' data-value='5'>
												<i class='fa fa-star fa-fw'></i>
											</li>
										</ul>
										<span class="badge badge-primary">4.3</span>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Related Events -->
	<section id="et-related-events" class="container-fluid pt-0 position-relative">
		<div class="section-heading">
			<p>Here are some of Related Events for you.</p>
			<br>
			<h2 class="mb-0">Related events</h2>
		</div>
		<div class="owl-carousel owl-theme">
			<div class="item pt-25 pb-25">
				<div class="event-grid shadow">
					<div class="image-wrap img-overlay">
						<span class="badge badge-primary like pointer position-absolute"><i class="icon-heart"></i></span>
						<span class="badge badge-secondary photocount position-absolute"><i class="icon-photo"></i> 26</span>
						<img src="img/related-event-1.jpg" alt="img" class="img-fluid">
					</div>
					<div class="content p-4">
						<h4 class="mb-3"><a href="#" class="text-decoration-none text-reset">Free seminar</a></h4>
						<p><i class="icon-clock align-middle text-primary"></i>&nbsp; 26 Feb - 28 Feb</p>
						<div class="d-flex event-actions">
							<span class="event-action pointer" data-toggle="tooltip" data-placement="bottom" title="Info@event.com"><i class="icon-contact"></i></span>
							<span class="event-action pointer" data-toggle="tooltip" data-placement="bottom" title="001-234-5678"><i class="icon-phone"></i></span>
							<span class="event-action pointer" data-toggle="tooltip" data-placement="bottom" title="43C, BlockChain ST, California, US"><i class="icon-compass"></i></span>
							<span class="event-action pointer" data-toggle="tooltip" data-placement="bottom" title="Prices are high">$$$</span>
						</div>
					</div>
				</div>
			</div>
			<div class="item pt-25 pb-25">
				<div class="event-grid shadow">
					<div class="image-wrap img-overlay">
						<span class="badge badge-primary like pointer position-absolute"><i class="icon-heart"></i></span>
						<span class="badge badge-secondary photocount position-absolute"><i class="icon-photo"></i> 26</span>
						<img src="img/related-event-2.jpg" alt="img" class="img-fluid">
					</div>
					<div class="content p-4">
						<h4 class="mb-3"><a href="#" class="text-decoration-none text-reset">Food Festival</a></h4>
						<p><i class="icon-clock align-middle text-primary"></i>&nbsp; 26 Feb - 28 Feb</p>
						<div class="d-flex event-actions">
							<span class="event-action pointer" data-toggle="tooltip" data-placement="bottom" title="Info@event.com"><i class="icon-contact"></i></span>
							<span class="event-action pointer" data-toggle="tooltip" data-placement="bottom" title="001-234-5678"><i class="icon-phone"></i></span>
							<span class="event-action pointer" data-toggle="tooltip" data-placement="bottom" title="43C, BlockChain ST, California, US"><i class="icon-compass"></i></span>
							<span class="event-action pointer" data-toggle="tooltip" data-placement="bottom" title="Prices are high">$$$</span>
						</div>
					</div>
				</div>
			</div>
			<div class="item pt-25 pb-25">
				<div class="event-grid shadow">
					<div class="image-wrap img-overlay">
						<span class="badge badge-primary like pointer position-absolute"><i class="icon-heart"></i></span>
						<span class="badge badge-secondary photocount position-absolute"><i class="icon-photo"></i> 26</span>
						<img src="img/related-event-3.jpg" alt="img" class="img-fluid">
					</div>
					<div class="content p-4">
						<h4 class="mb-3"><a href="#" class="text-decoration-none text-reset">Music festival</a></h4>
						<p><i class="icon-clock align-middle text-primary"></i>&nbsp; 26 Feb - 28 Feb</p>
						<div class="d-flex event-actions">
							<span class="event-action pointer" data-toggle="tooltip" data-placement="bottom" title="Info@event.com"><i class="icon-contact"></i></span>
							<span class="event-action pointer" data-toggle="tooltip" data-placement="bottom" title="001-234-5678"><i class="icon-phone"></i></span>
							<span class="event-action pointer" data-toggle="tooltip" data-placement="bottom" title="43C, BlockChain ST, California, US"><i class="icon-compass"></i></span>
							<span class="event-action pointer" data-toggle="tooltip" data-placement="bottom" title="Prices are high">$$$</span>
						</div>
					</div>
				</div>
			</div>
			<div class="item pt-25 pb-25">
				<div class="event-grid shadow">
					<div class="image-wrap img-overlay">
						<span class="badge badge-primary like pointer position-absolute"><i class="icon-heart"></i></span>
						<span class="badge badge-secondary photocount position-absolute"><i class="icon-photo"></i> 26</span>
						<img src="img/related-event-4.jpg" alt="img" class="img-fluid">
					</div>
					<div class="content p-4">
						<h4 class="mb-3"><a href="#" class="text-decoration-none text-reset">Auto show</a></h4>
						<p><i class="icon-clock align-middle text-primary"></i>&nbsp; 26 Feb - 28 Feb</p>
						<div class="d-flex event-actions">
							<span class="event-action pointer" data-toggle="tooltip" data-placement="bottom" title="Info@event.com"><i class="icon-contact"></i></span>
							<span class="event-action pointer" data-toggle="tooltip" data-placement="bottom" title="001-234-5678"><i class="icon-phone"></i></span>
							<span class="event-action pointer" data-toggle="tooltip" data-placement="bottom" title="43C, BlockChain ST, California, US"><i class="icon-compass"></i></span>
							<span class="event-action pointer" data-toggle="tooltip" data-placement="bottom" title="Prices are high">$$$</span>
						</div>
					</div>
				</div>
			</div>
			<div class="item pt-25 pb-25">
				<div class="event-grid shadow">
					<div class="image-wrap img-overlay">
						<span class="badge badge-primary like pointer position-absolute"><i class="icon-heart"></i></span>
						<span class="badge badge-secondary photocount position-absolute"><i class="icon-photo"></i> 26</span>
						<img src="img/related-event-4.jpg" alt="img" class="img-fluid">
					</div>
					<div class="content p-4">
						<h4 class="mb-3"><a href="#" class="text-decoration-none text-reset">Auto show</a></h4>
						<p><i class="icon-clock align-middle text-primary"></i>&nbsp; 26 Feb - 28 Feb</p>
						<div class="d-flex event-actions">
							<span class="event-action pointer" data-toggle="tooltip" data-placement="bottom" title="Info@event.com"><i class="icon-contact"></i></span>
							<span class="event-action pointer" data-toggle="tooltip" data-placement="bottom" title="001-234-5678"><i class="icon-phone"></i></span>
							<span class="event-action pointer" data-toggle="tooltip" data-placement="bottom" title="43C, BlockChain ST, California, US"><i class="icon-compass"></i></span>
							<span class="event-action pointer" data-toggle="tooltip" data-placement="bottom" title="Prices are high">$$$</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</section>
<script type="text/javascript">
	$( document ).ready(function() {
   myFunction();
});
	
	function myFunction() {
		var price=$('#selectedTicketPrice').val()
		if(price!=""){
			var t=parseInt(price)*parseInt($('#txtAtten').val());
        $('#txtTotal').html("$"+t);
		}else{
			console.log("Please Select The Ticket");
		}
        
}
function getSeletedTicket(s){
	$('#selectedTicketPrice').val(s);
	myFunction();
}
</script>
@endsection
