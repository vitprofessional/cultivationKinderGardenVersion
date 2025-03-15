@php
    $sliderDetails = \App\Models\SliderManage::orderBy('id','DESC')->get();
@endphp
<div class="row" style="margin-top: -1.5rem">
    <div class="col-12">
        <div id="carouselExampleCaptions" class="carousel slide">
            @if($sliderDetails->isEmpty())
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            @else
                <div class="carousel-indicators">
                    @php
                        $x = 0;
                    @endphp
                    @foreach($sliderDetails as $slideCaption)
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $x }}" class="@if($x==0) active @endif" @if($x==0) aria-current="true" @endif aria-label="{{ $slideCaption->title }}"></button>
                    @php
                        $x++;
                    @endphp
                    @endforeach
                </div>
            @endif
            <div class="carousel-inner">
                @if($sliderDetails->isEmpty())
                <div class="carousel-item active">
                    <img src="{{ asset('public/img/slider/') }}/slider1.jpg" class="d-block w-100" style="height:450px" alt="..." />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('public/img/slider/') }}/slider2.jpg" class="d-block w-100" alt="..." />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('public/img/slider/') }}/slider3.jpg" class="d-block w-100" alt="..." />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
                @else
                    @php
                        $y = 0;
                    @endphp
                    @foreach($sliderDetails as $slider)
                    <div class="carousel-item @if($y==0) active @endif">
                        <img src="{{ asset('public/upload/image/slider/') }}/{{ $slider->avatar }}" class="d-block w-100" style="height:450px" alt="{{ $slider->title }}" />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $slider->title }}</h5>
                            <p>{{ $slider->description }}</p>
                        </div>
                    </div>
                    @php
                        $y++;
                    @endphp
                    @endforeach
                @endif
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 mx-auto my-4">
            <div class="row align-items-center">
                <div class="col-md-3 col-12">
                    <div class="bg-success text-white details-box p-3">
                        <div class="details-box-icon">
                            <i class="fa-duotone fa-school-flag"></i>
                        </div>
                        <div class="details-box-content">
                            <h3>Founded</h3>
                            <p>{{ $establishDate }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="bg-success text-white details-box p-3">
                        <div class="details-box-icon">
                            <i class="fa-duotone fa-book-open-reader"></i>
                        </div>
                        <div class="details-box-content">
                            <h3>Green Campus</h3>
                            <p>26 Acres</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="bg-success text-white details-box p-3">
                        <div class="details-box-icon">
                            <i class="fa-duotone fa-screen-users"></i>
                        </div>
                        <div class="details-box-content">
                            <h3>Teacher & Staff</h3>
                            <p>30+</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="bg-success text-white details-box p-3">
                        <div class="details-box-icon">
                            <i class="fa-light fa-users-viewfinder"></i>
                        </div>
                        <div class="details-box-content">
                            <h3>Students</h3>
                            <p>1500+</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
