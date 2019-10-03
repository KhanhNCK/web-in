@extends('master-layout')
@section('title')
Quảng cáo
@endsection
@section('css') 
<link rel="stylesheet" type="text/css" href="css/inan.css">


@endsection
@section('content')
<main>	
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="    padding-bottom: 20px;">
				<h5 class="main-title wow rotateInDownRight" data-wow-duration="1s">Quảng cáo</h5>
			</div>	
			<!-- Danh thiếp - Name card  -->
			<div class="col-md-6 col-xs-12" style="background-image: linear-gradient(to right top , #FFFF66 , white, #FFFF66, white);">
				<h5 class="title text-center wow bounceInDown"data-wow-duration="2s" ><i>	1. Ảnh siêu nét khổ lớn trên các chất liệu, giấy ảnh, decan, canvas, pipi, vải lụa </i></h5>
				<div class="col-md-12 col-xs-12"style="padding: 0 20px;">
					<p class="sub-title-left wow bounceInLeft" data-wow-duration="3s">Bạn muốn in những bức ảnh khổ lớn để quảng cáo, trang trí cửa hàng, decan khuyến mãi hay phục vụ các mục đích khác. Công ty chúng tôi là đơn vị hàng đầu tại Thái Nguyên phục vụ nhu cầu đó, sản phảm được in trên các chất liêu giấy ảnh, decan các loại, canvas, pipi, lụa...
					</p>
					<!-- <span>
						<ul class="sub-title-thongtin wow fadeInUpBig"data-wow-duration="3s" style="list-style: none;padding: 0px 12px 0 20px">* Thông tin sản phẩm:
							<li class="thongtin">Kích thước: Thông dụng nhất là 90x54, 90 x50 hoặc tùy theo yêu cầu, sở thích của khách hàng.</li>
							<li class="thongtin">Chất liệu:
								<li style="padding-left: 30px;">-Giấy Couche 300
								</li>
								<li style="padding-left: 30px;">-Giấy op</li>
								<li style="padding-left: 30px;">-Các loại giấy mỹ thuật </li>
							</li>
							<li class="thongtin">Cán mờ hoặc cán bóng để tạo lớp màng bảo vệ giấy đồng thời giúp tăng tính thẩm mỹ cho sản phẩm.</li>
						</ul>
					</span>
				-->
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="col-md-12 col-xs-12">
					<h1 class="title-bottom text-center">Sản phẩm đã làm</h1>
				</div>
				<div class="sanpham col-md-12 col-sm-12 col-xs-12" style="display: flex;">
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/in-anh-cuoi-nhieu-chat-lieu.jpg" alt="">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/in-anh-cuoi-nhieu-chat-lieu.jpg" alt="">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/in-anh-cuoi-nhieu-chat-lieu.jpg" alt="">
					</div>
				</div>
				<a class="chitietsanpham"href="http://127.0.0.1:8000/quangcao_anhsieunet">Chi tiết</a>


			</div>
		</div>
		<!-- Tem - Nhãn   -->
		<div class="col-md-6 col-xs-12" style="background-image: linear-gradient(to right top , #FFFF66 , white, #FFFF66, white);">
			<h5 class="title text-center wow bounceInDown"data-wow-duration="2s"><i>2. Biển bạt, bangzon, khẩu hiệu, backrop - Standee</i></h5>
			<div class="col-md-12 col-xs-12"style="float:left; padding-bottom:10px;padding: 0 20px;">
				<p class="sub-title-right wow bounceInRight"data-wow-duration="3s">
				Bạt hiflex - chất liệu ưa thích và thông dụng trong làm biển quảng cáo, Bangzon, khẩu hiệu, backrop - Standee không chỉ bởi vì bạt hiflex có giá thành sản xuất tương đối rẻ, dễ thi công và in ấn nhanh mà biển quảng cáo bạt còn có những ưu điểm vượt trội đó là biển bạt có thể sử dụng làm biển nhỏ và cả những tấm biển tấm lớn, biển hộp đèn 1 mặt hoặc 2 mặt, biển tự đứng, biển vẫy... 
				</p>
					<!-- <p class="sub-title wow bounceInRight" data-wow-duration="3s"style="padding-bottom: 20px;">
						TẠI SAO bạn lại không đầu tư nâng tầm sản phẩm của mình với những mẫu tem nhãn đẹp và giá thành không thể hợp lý hơn?		
					</p> -->
					<!-- <span>
						<ul class="sub-title-thongtin wow fadeInUpBig" data-wow-duration="3s" style="list-style: none;padding: 0px 12px 0 20px">* Thông tin sản phẩm: Công ty chúng chuyên sản xuất các loại tem nhãn:
							<li class="thongtin">In logo - sticker dán Trà sữa, chai lọ PE, nhựa, Thủy tinh...</li>
							<li class="thongtin">In logo - sticker dán hoa quả, bánh kẹo, mũ bảo hộ.</li>
							<li class="thongtin">
								In sticker dán má, chân tay, vải, quần áo, gỗ, kim loại, laptop.
							</li>
							<li class="thongtin">
								Tem vỡ bảo hành sản phẩm.
							</li>
							<li class="thongtin">
								Decan dán đuôi otô.
							</li>
							<li class="thongtin">
								Tem vỡ 7 màu chất lượng cao.
							</li>
							<li class="thongtin">
								Tem nhôm
							</li>

						</ul>
					</span> -->
					<!-- <strong class="title-temnhan wow tada" data-wow-duration="1s"data-wow-iteration="2" data-wow-delay="1s" style="text-align: center;color: red;display: block;font-size: 1.5em;    padding-top: 10px;">Đặc biệt tất cả các sản phẩm sẽ được cắt bế theo mọi hình dáng khách hàng yêu cầu.</strong> -->
					
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12" style="float:right; padding-bottom: 30px;">
					<div class="col-md-12 col-xs-12">
						<h1 class="title-bottom text-center">Sản phẩm đã làm</h1>
					</div>
					<div class="sanpham col-md-12 col-sm-12 col-xs-12" style="display: flex;">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/lam-bien-bat-hiflex-tai-ha-long.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/lam-bien-bat-hiflex-tai-ha-long.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/lam-bien-bat-hiflex-tai-ha-long.jpg" alt="">
						</div>
					</div>
					<a class="chitietsanpham"href="http://127.0.0.1:8000/quangcao_bienbat">Chi tiết</a>
				</div>
				
			</div>

			<!-- Tờ in - tờ quảng cáo -->
			<div class="col-md-6 col-xs-12" style="background-image: linear-gradient(to right top , #FFFF66 , white, #FFFF66, white);">
				<h5 class=" title text-center wow bounceInLeft"data-wow-duration="2s"  data-wow-iteration="1s"><i>3. Biển led</i></h5>
				<div class="col-md-12 col-xs-12"style="float:left; padding-bottom: 30px;">
					<p class="sub-title-left wow bounceInLeft" data-wow-duration="3s">
					Là một trong những ứng dụng phổ thông nhất, rẻ và hiệu quả rất cao. Mặc dù chi phí cao hơn biển quảng cáo bạt hiflex, biển quảng cáo mica, biển quảng cáo alu... nhưng biển quảng cáo Led có độ thu hút gấp nhiều lần. Một chiếc biển quảng cáo Led sẽ mang lại cho cửa hàng của bạn một cuộc "bùng nổ" khách hàng mà có thể bạn không ngờ tới.
					</p>
					<!-- <span>
						<ul class="sub-title-thongtin wow fadeInUpBig" data-wow-duration="3s"style="list-style: none;padding: 0px 12px 0 20px">* Thông tin sản phẩm:
							<li class="thongtin">Kích thước: A5, A4, A3 (tùy theo khách hàng yêu cầu).
							</li>
							<li class="thongtin">Chất liệu:
								<li style="padding-left: 30px;">-Giấy ốp định lượng: 100, 150, 200, 250
								</li>
								<li style="padding-left: 30px;">-Giấy couche, định lượng: 80, 100, 150, 200, 250, 300</li>
								<li style="padding-left: 30px;">-Các loại giấy theo yêu cầu cuả khách hàng
								</li>
							</li>
							<li class="thongtin">Yêu cầu sau in:  Bế, gấp rãnh lằn, cán mờ hoặc cán bóng.</li>
						</ul>
					</span> -->

				</div>	
				<div class="col-md-12 col-sm-12 col-xs-12" style="float:right; padding-bottom: 30px;">
					<div class="col-md-12 col-xs-12">
						<h1 class="title-bottom text-center">Sản phẩm đã làm</h1>
					</div>
					<div class="sanpham col-md-12 col-sm-12 col-xs-12" style="display: flex;">
						<div class=" col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/Mau-bien-dien-tu.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/Mau-bien-dien-tu.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/Mau-bien-dien-tu.jpg" alt="">
						</div>
					</div>
					<a class="chitietsanpham"href="http://127.0.0.1:8000/quangcao_bienled">Chi tiết
					</a>
				</div>
				
			</div>
			<!-- in áo, đồng phục, logo công ty   -->
			<div class="col-md-6 col-xs-12" style="background-image: linear-gradient(to right top , #FFFF66 , white, #FFFF66, white);">
				<h5 class="title text-center wow bounceInDown"data-wow-duration="2s"><i>4. Biển quảng cáo alu gắn chữ nổi kết hợp với bóng led </i></h5>
				<div class="col-md-12 col-xs-12"style="float:left; padding-bottom: 30px;">
					
					<p class="sub-title-right wow bounceInRight" data-wow-duration="3s">Công ty chúng tôi chuyên thiết kế & thi công các loại hình biển quảng cáo alu và mặt dựng tòa nhà, văn phòng, cửa hàng, showroom (Mặt dựng Alu) bằng vật liệu là tấm nhôm nhựa Alu bảo đảm tính thẩm mỹ, hiện đại, độ bền cao
					</p>
					
					<!-- <span>
						<ul class="sub-title-thongtin wow fadeInUpBig" data-wow-duration="3s" style="list-style: none;padding: 0px 12px 0 20px">* Thông tin sản phẩm:
							<li class="thongtin">Đồng phục lớp</li>
							<li class="thongtin">Đồng Phục công ty, câu lạc bộ, nhóm</li>
							<li class="thongtin">
								Đồng phục áo khoác
							</li>
							<li class="thongtin">
								Chất liệu: vải cotton hoặc lascote (hoặc theo yêu cầu của khách hàng)
							</li>
						</ul>
					</span> -->
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12" style="float:right; padding-bottom: 30px;">
					<div class="col-md-12 col-xs-12">
						<h1 class="title-bottom text-center">Sản phẩm đã làm</h1>
					</div>
					<div class="sanpham col-md-12 col-sm-12 col-xs-12" style="display: flex;">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/tải xuống (1).jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/tải xuống (1).jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/tải xuống (1).jpg" alt="">
						</div>
					</div>
					<a class="chitietsanpham"href="http://127.0.0.1:8000/quangcao_alu">Chi tiết</a>
				</div>
				
			</div>
			<!-- Phong bì -->
			<div class="col-md-6 col-xs-12" style="background-image: linear-gradient(to right top , #FFFF66 , white, #FFFF66, white);">
				<h5 class=" title text-center wow bounceInLeft"data-wow-duration="2s"  data-wow-iteration="1s"><i>5. Gian hàng trải nghiệm - Quầy bán hàng lưu động</i></h5>
				<div class="col-md-12 col-xs-12"style="float:left; padding-bottom: 30px;">
					
					<p class="sub-title-left" >
						<ul class="sub-title-right wow bounceInLeft"data-wow-duration="3s" style="list-style: none;padding: 0px 12px 0 20px"> Gian hàng trải nghiệm tại những hội chợ, triển lãm là bộ mặt của quý doanh nghiệp trong chiến dịch quảng bá sản phẩm, dịch vụ của mình ra công chúng đó là một yếu tố không thể thiếu để góp phần vào sự thành công của một chiến dịch quảng cáo sản phẩm dịch vụ. Công ty chúng tôi có đội ngũ thợ lành nghề giúp bạn lập kế hoạch và thực hiện một cách chuyên nghiệp và hiệu quả công việc này. phong bì này ra - Hãy để công ty chúng tôi giúp bạn điều đó.	 -->
						</ul>
						
					</p>
					<!-- <span>
						<ul class="sub-title-thongtin wow fadeInUpBig" data-wow-duration="3s"style="list-style: none;padding: 0px 12px 0 20px">* Thông tin sản phẩm:
							<li class="thongtin">Kích thước: 12x22cm, 14x22cm, 16x23cm, 24x35cm (hoặc tùy theo khách hàng yêu cầu)
							</li>
							<li class="thongtin">Chất liệu giấy: Các loại giấy op, giấy couche với định lượng khách nhau.
							</li>

						</ul>
					</span> -->

				</div>	
				<div class="col-md-12 col-sm-12 col-xs-12" style="float:right; padding-bottom: 30px;">
					<div class="col-md-12 col-xs-12">
						<h1 class="title-bottom text-center">Sản phẩm đã làm</h1>
					</div>
					<div class="sanpham col-md-12 col-sm-12 col-xs-12" style="display: flex;">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/tải xuống (2).jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/tải xuống (2).jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/tải xuống (2).jpg" alt="">
						</div>
					</div>
					<a class="chitietsanpham"href="http://127.0.0.1:8000/quangcao_gianhang">Chi tiết</a>
				</div>
				
			</div>
			<!-- In kỷ yếu, sổ lưu bút.  -->
			<div class="col-md-6 col-xs-12" style="background-image: linear-gradient(to right top , #FFFF66 , white, #FFFF66, white);">
				<h5 class="title text-center wow bounceInDown"data-wow-duration="2s"><i>6. Biển báo giao thông - Biển phản quang</i></h5>
				<div class="col-md-12 col-xs-12"style="float:left; padding-bottom: 30px;">
					
					<p class="sub-title-right wow bounceInRight" data-wow-duration="3s">Các biển báo được công ty  chúng  sản xuất sử dụng màng phản quang và mực in phản quang của hãng 3M của Mỹ, được hiệp hội đo lường và vật liệu Mỹ công nhận đạt tiêu chuẩn về chất lượng. Màng phản quang thoả mãn TCVN7887:2008 - Có chất lượng cao: phản quang tốt, sắc nét và sử dụng bền nhằm tăng cường độ cảnh báo, làm tăng độ rõ dễ nhận thấy cả ngày và đêm.
					</p>
					
					<!-- <span>
						<ul class="sub-title-thongtin wow fadeInUpBig" data-wow-duration="3s" style="list-style: none;padding: 0px 12px 0 20px">* Thông tin sản phẩm:
							<li class="thongtin">Giấy: giấy couche, giấy ốp, giấy mỹ thuật  (hoặc khách hàng yêu cầu)</li>
							<li class="thongtin">KÍch thước: A5, A4 (hoặc khách hàng yêu cầu)</li>
							<li class="thongtin">
								Đóng bìa cứng, bìa da mạ chữ vàng (hoặc khách hàng yêu cầu)
							</li>
						</ul>
					</span> -->
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12" style="float:right; padding-bottom: 30px;">
					<div class="col-md-12 col-xs-12">
						<h1 class="title-bottom text-center">Sản phẩm đã làm</h1>
					</div>
					<div class="sanpham col-md-12 col-sm-12 col-xs-12" style="display: flex;">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/images.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/images.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/images.jpg" alt="">
						</div>
					</div>
					<a class="chitietsanpham"href="http://127.0.0.1:8000/quangcao_bienbao">Chi tiết</a>
				</div>
				
			</div>
			<!-- Túi nilon -->
			<div class="col-md-6 col-xs-12" style="background-image: linear-gradient(to right top , #FFFF66 , white, #FFFF66, white);">
				<h5 class=" title text-center wow bounceInLeft"data-wow-duration="2s"  data-wow-iteration="1s"><i>7. Trang trí ánh sáng nhà hàng, khách sạn, quán cafe</i></h5>
				<div class="col-md-12 col-xs-12"style="float:left; padding-bottom: 30px;">
					<p class="sub-title-left wow bounceInLeft" >
					Với ánh sáng sẽ tạo phong cách và cá tính riêng cho nhà hàng góp phần vào trải nghiệm tổng thể của khách hàng.
					</p>
					<!-- <p class="sub-title wow bounceInLeft"data-wow-duration="3s"style="padding-bottom:20px;">

						<ul class="sub-title-thongtin wow bounceInLeft"data-wow-duration="3s" style="list-style: none;padding: 0px 12px 0 20px">
							<li class="thongtin">Túi nilon PE: Có độ dai tốt nhất trong các loại túi nilon, độ bóng bề mặt cao, mịn màng khó bị kéo dãn. Túi PE có tính mềm dẻo hơn túi HD, khả năng đựng đồ vật nặng tốt hơn túi HD.
							</li>
							<li class="thongtin">Túi nilon HD là loại túi có bề mặt mờ, không nhìn xuyên vào bên trong, nhìn sang trọng. Túi HD  có 2 mức độ dày, mỏng để khách hàng lựa chọn. </li>
							
						</ul>	
					</p> -->
					<!-- <span>
						<ul class="sub-title-thongtin wow fadeInUpBig" data-wow-duration="3s"style="list-style: none;padding: 0px 12px 0 20px">Kích thước Túi nilon
							<li class="thongtin">Các kích thước tiêu chuẩn để in túi nilon:  kích thước tiêu chuẩn 20x30cm, 25x35cm, 30x42cm, 35x50cm, 40x60cm.
							</li>
							<li class="thongtin">Màu sắc đa dạng: trong, trắng, xanh cốm, tím, trắng, đen, vàng, đỏ, xanh dương, da cam, hồng,…
							</li>

						</ul>
					</span> -->

				</div>	
				<div class="col-md-12 col-sm-12 col-xs-12" style="float:right; padding-bottom: 30px;">
					<div class="col-md-12 col-xs-12">
						<h1 class="title-bottom text-center">Sản phẩm đã làm</h1>
					</div>
					<div class="sanpham col-md-12 col-sm-12 col-xs-12" style="display: flex;">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/tải xuống (3).jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/tải xuống (3).jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/tải xuống (3).jpg" alt="">
						</div>
					</div>
					<a class="chitietsanpham"href="http://127.0.0.1:8000/quangcao_anhsang">Chi tiết</a>
				</div>
				
			</div>
			<!-- Túi hộp giấy  -->
			<div class="col-md-6 col-xs-12" style="background-image: linear-gradient(to right top , #FFFF66 , white, #FFFF66, white);">
				<h5 class="title text-center wow bounceInDown"data-wow-duration="2s"><i>8. Biển tên công ty - Biển phòng</i></h5>
				<div class="col-md-12 col-xs-12"style="float:left; padding-bottom: 30px;">
					
					<p class="sub-title-right wow bounceInRight"  data-wow-duration="3s">Biển tên Công ty là 1 trong những loại biển quảng cáo thông dụng nhất được chia thành 4 nhóm chính...
					</p>
					
					<!-- <span>
						<ul class="sub-title-thongtin wow fadeInUpBig" data-wow-duration="3s" style="list-style: none;padding: 0px 12px 0 20px">* Thông tin sản phẩm:
							<li class="thongtin">In túi giấy trên nguyên liệu giấy couches, duplex, Ivory..</li>
							<li class="thongtin">In túi giấy Kraft trên nguyên liệu giấy tái chế...</li>
							<li class="thongtin">
								Loại túi giấy đứng (cao x dài x đáy) :
								<li style="padding-left: 30px;">- 410 x 290 x 100 mm 
								</li>
								<li style="padding-left: 30px;">- 400 x 300 x 90 mm </li>
								<li style="padding-left: 30px;">- 255 x 200 x 120 mm </li>
								<li style="padding-left: 30px;">- 140 x 130 x 60 mm </li>
							</li>
							<li class="thongtin">
								Loại túi giấy ngang: (cao x dài x đáy):
								<li style="padding-left: 30px;">- 320 x 380 x 100 mm  
								</li>
								<li style="padding-left: 30px;">- 230 x 330 x 90 mm </li>
								<li style="padding-left: 30px;">- 230 x 280 x 75 mm </li>
							</li>
						</ul>
					</span> -->
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12" style="float:right; padding-bottom: 30px;">
					<div class="col-md-12 col-xs-12">
						<h1 class="title-bottom text-center">Sản phẩm đã làm</h1>
					</div>
					<div class="sanpham col-md-12 col-sm-12 col-xs-12" style="display: flex;">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/tải xuống (4).jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/tải xuống (4).jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/tải xuống (4).jpg" alt="">
						</div>
					</div>
					<a class="chitietsanpham"href="http://127.0.0.1:8000/quangcao_bienten">Chi tiết</a>
				</div>
				
			</div>
			<!-- Phiếu giao hàng, phiếu nhập kho, Oder nhà hàng, quán cafe... -->
			<div class="container" style="background-image: linear-gradient(to right top , #FFFF66 , white, #FFFF66, white);">
				<h5 class=" title text-center wow bounceInLeft"data-wow-duration="2s"  data-wow-iteration="1s"><i>9. In , cắt dán decan ôtô</i></h5>
				<div class="col-md-12 col-xs-12"style="float:left; padding-bottom: 30px;">
					<p class="sub-title-left wow bounceInLeft" >
					Bạn có muốn quảng cáo cửa hàng, doanh nghiệp, công ty của mình với mức giá SIÊU RẺ ko? hãy nghĩ đến phương án quảng cáo trên những chiếc xế yêu của bạn nhé. Bạn đi đâu hình ảnh theo đó vừa tạo được dấu ấn riêng, vừa đem lại lợi ích quảng cáo tuyệt vời. Công ty chúng tôi sẽ giúp bạn truyền đạt những thông điệp,hình ảnh lên trên chiếc xế yêu của bạn.
					</p>
					<!-- <span>
						<ul class="sub-title-thongtin wow fadeInUpBig" data-wow-duration="3s"style="list-style: none;padding: 0px 12px 0 20px">Thông tin sản phẩm:
							<li class="thongtin">Kích thước thông dụng: A4, A5, A6...
							</li>
							<li class="thongtin">In 1 trong 3 màu: đỏ, xanh, hoặc đen
							</li>
							<li class="thongtin">Giấy BB  60 gsm, 100 tờ/ cuốn
							</li>
							<li class="thongtin">Giấy carbonless 2 liên (100 tờ/ cuốn), 3 liên (99 tờ/ cuốn).
							</li>
							<li class="thongtin">Răng cưa đóng cuốn hoặc dán keo đầu.
							</li>

						</ul>
					</span> -->

				</div>	
				<div class="col-md-12 col-sm-12 col-xs-12" style="float:right; padding-bottom: 30px;">
					<div class="col-md-12 col-xs-12">
						<h1 class="title-bottom text-center">Sản phẩm đã làm</h1>
					</div>
					<div class="sanpham col-md-12 col-sm-12 col-xs-12" style="display: flex;">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/414933-63662-image-o8i_dagpdwr7nphn21zr.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/414933-63662-image-o8i_dagpdwr7nphn21zr.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/414933-63662-image-o8i_dagpdwr7nphn21zr.jpg" alt="">
						</div>
					</div>
					<a class="chitietsanpham"href="http://127.0.0.1:8000/quangcao_decan">Chi tiết</a>
				</div>
				
			</div>
			<!-- Giấy khen, giấy chứng nhận-->
			
		</div>
	</div>
</main>
@endsection