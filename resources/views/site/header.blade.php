<div class="container">
    <div class="header_box">	  
        @if(isset($menu))	  
        <nav class="navbar navbar-inverse" role="navigation">
            <div id="main-nav" class="collapse navbar-collapse navStyle">
                <ul class="nav navbar-nav" id="mainNav">
                    @foreach($menu as $item)
                    <li><a href="#{{ $item['alias'] }}" class="scroll-link">{{ $item['title'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </nav>
        @endif
    </div>
</div>
@if(session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif

@if(count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

