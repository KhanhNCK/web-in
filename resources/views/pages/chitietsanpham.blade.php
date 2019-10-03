@extends('master-layout')
@section('title')
Danh thiệp - Name card
@endsection
@section('css') 
<link rel="stylesheet" type="text/css" href="css/chitietsanpham.css">
@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-xs-12 main" style="background-image: linear-gradient(to right top , #FFFF66 , white, #FFFF66, white); padding-bottom: 30px;">
				<h5 class="title wow bounceInDown"data-wow-duration="2s" style="    margin-top: 20px;margin-left: 80px;" >
					<i style="font-size: 2em;font-weight: 800;"> 
					Danh thiếp - Name card </i>
				</h5>
				<div class="col-md-12 col-xs-12 " style="padding: 0 20px;">
					<div class="col-md-8 title-left" style="float: left">
						<p class="sub-title-left wow bounceInLeft" data-wow-duration="3s">Bạn làm doanh nhân tự do, bạn làm trong cơ quan nhà nước hay bất kỳ vị trí nào khác miễn là bạn có các mối quan hệ và bạn muốn phát triển sự nghiệp của mình, tôi dám chắc rằng sẽ là thiếu sót vô cùng lớn nếu như bạn không có tấm danh thiếp của bản thân hay công ty bởi vì không ai có thể nhớ hết các thông tin qua truyền miệng sau một lần gặp, nhưng cũng thật kỳ cục khi phải tìm kiếm bút giấy để viết lại thông tin của mình khi khách hàng hỏi đến. 
					</p>
					 <span>
						<ul class="sub-title-thongtin-chitiet wow fadeInUpBig"data-wow-duration="3s" style="list-style: none;padding: 0px 12px 0 20px">* Thông tin sản phẩm:
							<li class="thongtin-chitiet">Kích thước: Thông dụng nhất là 90x54, 90 x50 hoặc tùy theo yêu cầu, sở thích của khách hàng.</li>
							<li class="thongtin-chitiet">Chất liệu:
								<li style="padding-left: 30px;">-Giấy Couche 300
								</li>
								<li style="padding-left: 30px;">-Giấy op</li>
								<li style="padding-left: 30px;">-Các loại giấy mỹ thuật </li>
							</li>
							<li class="thongtin-chitiet">Cán mờ hoặc cán bóng để tạo lớp màng bảo vệ giấy đồng thời giúp tăng tính thẩm mỹ cho sản phẩm.</li>
						</ul>
					</span></div>
					
				
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12" style="float: right">
					
						<img class="img-fluid img-sanpham1"src="images/inan/danhthiep-3.jpg" alt="">
					
				</div>
			


			</div>
		</div>
	</div>
</div>

@endsection