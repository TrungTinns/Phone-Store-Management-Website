@extends('layouts.center')
@section('contents')
@include('user_m.partial.banner',['p1' => 'Contact']);

<section id="contact_area" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact_info">
                        <h3>Liên hệ với chúng tôi</h3>
                        <p>Nếu bạn cần trợ giúp, vui lòng truy cập Trung tâm trợ giúp của chúng tôi.
                             Ở đó, bạn sẽ tìm thấy câu trả lời cho nhiều câu hỏi thường gặp về việc tạo tài khoản,
                             mua hàng.
                            Nếu bạn không thể tìm thấy những điều mình đang tìm kiếm trong Trung tâm trợ giúp,
                            chúng tôi khuyên bạn nên truy cập Diễn đàn trợ giúp cộng đồng của chúng tôi. 
                            Bạn gặp phải lỗi? Hãy xem trang Các vấn đề hiện tại trên trang web của chúng tôi 
                            để xem danh sách các vấn đề đã biết mà chúng tôi đang cố gắng khắc phục.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="left_side_contact" style="margin:auto;">
                        <ul>
                            <li class="address_location">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>Hồ Chí Minh</p>
                            </li>
                            <li class="address_location">
                                <i class="fas fa-phone-volume"></i>
                                <div class="contact_widget">
                                    <a href="#!">+1 (833) 287-3077</a>
                                    <a href="#!">+1 (833) 528-8619</a>
                                </div>
                            </li>
                            <li class="address_location">
                                <i class="far fa-envelope"></i>
                                <div class="contact_widget">
                                    <a href="#">520H0513@student.tdtu.edu.vn</a>
                                    <a href="#">520H0513@student.tdtu.edu.vn</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>   
                <div class="col-lg-8">
                    <div class="contact_form_one">
                        <h3>Điền thông tin cần tư vấn</h3>
                        <form action="#!">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Name*">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" placeholder="Email*">
                                    </div>
                                </div>                               
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <textarea rows="7" class="form-control" name="message" placeholder="Message*"></textarea>
                                    </div>
                                    <div class="submit_bitton_contact_one">
                                        <button class="theme-btn-one btn-black-overlay btn_md">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>        
                <div class="col-lg-12">
                    <div class="map_area">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.6202307710078!2d108.24835911388108!3d15.981196746038266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108fec4d61cb%3A0x488a4686a8e2c948!2zMjYgTmd1eeG7hW4gVOG6oW8sIEhvw6AgSOG6o2ksIE5nxakgSMOgbmggU8ahbiwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1634144139711!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection