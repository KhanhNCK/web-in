@extends('master-layout')
@section('title')
Quảng cáo
@endsection
@section('content')
<body>
<div class="thanh-bar">
<div class="container">


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('trangchu')}}">Trang chủ</a></li>
    <li class="breadcrumb-item"><a href="{{route('inan')}}">In ấn</a></li>
    <li class="breadcrumb-item active" aria-current="quangcao">Quảng cáo</li>
    <li class="breadcrumb-item"><a href="#">Lĩnh vực mở rộng</a></li>
    
  </ol>
</nav>
</div>
</div>
<div class="container">
<div class="row no-gutters">
<div class="col-6 col-md-4">
<a href="#" style=" color:#FFFFFF; text-transform:uppercase; font-weight:600; font-size:14px; background:#0163ae; padding:8px 12px 8px 12px; " title="Xem tất cả dịch vụ">Quảng Cáo</a>
<div style="background:#1b9bd8; height:2px;width:60%; margin:7px 0px 10px 0px"></div>
<div class="ad_danhmuc">


<div style="background:url(img/r.png) no-repeat right"><a href="{{route('quangcao_anhsieunet')}}" class="ad_danhmuc2">Ảnh siêu nét khổ lớn</a></div>

<div style="background:#d2d2d2; height:1px;width:60%; margin:10px 0px 10px 0px"></div>

			
		<div style="height:10px"></div>


<div style="background:url(img/r.png) no-repeat right"><a href="{{route('quangcao_bienbat')}}" class="ad_danhmuc2">Biển bạt, bangzon,...</a></div>

<div style="background:#d2d2d2; height:1px;width:60%; margin:10px 0px 10px 0px"></div>

			
		<div style="height:10px"></div>


<div style="background:url(img/r.png) no-repeat right"><a href="{{route('quangcao_bienled')}}" class="ad_danhmuc2">Biển led</a></div>

<div style="background:#d2d2d2; height:1px;width:60%; margin:10px 0px 10px 0px"></div>

			
		<div style="height:10px"></div>


<div style="background:url(img/r.png) no-repeat right"><a href="{{route('quangcao_bienbao')}}" class="ad_danhmuc2">Biển quảng cáo alu </a></div>

<div style="background:#d2d2d2; height:1px;width:60%; margin:10px 0px 10px 0px"></div>

			
		<div style="height:10px"></div>
    <div style="background:url(img/r.png) no-repeat right"><a href="{{route('quangcao_gianhang')}}" class="ad_danhmuc2">Gian hàng trải nghiệm </a></div>

<div style="background:#d2d2d2; height:1px;width:60%; margin:10px 0px 10px 0px"></div>

			
		<div style="height:10px"></div>
    <div style="background:url(img/r.png) no-repeat right"><a href="{{route('quangcao_anhsang')}}" class="ad_danhmuc2">Trang trí ánh sáng nhà hàng</a></div>

<div style="background:#d2d2d2; height:1px;width:60%; margin:10px 0px 10px 0px"></div>

			
		<div style="height:10px"></div>
    <div style="background:url(img/r.png) no-repeat right"><a href="{{route('quangcao_bienten')}}" class="ad_danhmuc2">Biển tên công ty </a></div>

<div style="background:#d2d2d2; height:1px;width:60%; margin:10px 0px 10px 0px"></div>

			
		<div style="height:10px"></div>
    <div style="background:url(img/r.png) no-repeat right"><a href="{{route('quangcao_decan')}}" class="ad_danhmuc2">In , cắt dán decan ôtô</a></div>

<div style="background:#d2d2d2; height:1px;width:60%; margin:10px 0px 10px 0px"></div>

			
		<div style="height:10px"></div>

	</div>
</div>
  <div class="col-12 col-sm-6 col-md-8"></div>
 
</div>
</div>
</body>
@endsection