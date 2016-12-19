@if(isset($pages) && is_object($pages))
@foreach($pages as $k=>$page)
@if($k%2 == 0)
<section id="{{$page->alias}}" class="top_cont_outer">
    <div class="hero_wrapper">
        <div class="container">
            <h2>{{ $page->name}}</h2>
            <div class="hero_section">
                <div class="row">
                    <div class="col-lg-5 col-sm-7">
                        <div class="top_left_cont zoomIn wow animated"> 
                            {!! $page->text !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Hero_Section-->
@else
<section id="{{$page->alias}}"><!--Aboutus-->
    <div class="inner_wrapper">
        <div class="container">
            <h2>{{ $page->name}}</h2>
            <div class="inner_section">
                <div class="row">
                    <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
                        <div class=" delay-01s animated fadeInDown wow animated">
                            {!! $page->text !!}
                        </div>     
                    </div>
                </div>
            </div>
        </div> 
    </div>
</section>
<!--Aboutus--> 
@endif
@endforeach
@endif
