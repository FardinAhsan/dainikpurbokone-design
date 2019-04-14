<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="ico_moon/style.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<div class="container">

    <header>
        <div class="header-top">
            <div class="row">
                <div class="language col-12 col-auto col-lg-6 col-md-6 col-sm-auto text-left">
                    <button class="btn btn-md">বাংলায় সমস্যা ?</button>
                    <button class="btn btn-md">লগ ইন</button>
                    <button class="btn btn-md">রেজিস্ট্রেশন</button>
                </div>
                <div class="contact-info col-12 col-auto col-lg-6  col-md-6 col-sm-auto text-right">
                    <i class="icon-phone"></i><p> ৯৩৩২৬৫৭, ৮৩৫৯৩৮২ ।</p>
                    <i class=" icon-envelop"></i><a href="#">news@dainikpurbokone.net</a>
                </div>
            </div>
        </div>
        <div class="logo-part">
            <div class="row">
                <div class="logo col-12 col-auto col-lg-4 col-md-4 col-sm-auto">
                    <img src="images/purbokon.png" alt="দৈনিক পুর্বকোণ" class="img-fluid">
                    <div class="date"><span><?php echo date('l F Y')?></span> । ২৬ জ্যৈষ্ঠ ১৪২৫ বঙ্গাব্দ</div>
                </div>
                <div class="top-stories col-12 col-auto col-lg-8 col-md-8 col-sm-auto">
                    <h3>তাজা খবর</h3>
                    <div class="owl-carousel owl-theme" id="owl-demo">
                        <div class="top-news col-12 col-auto">
                            <a href="#">ভুলত্রুটি থাকলে সংশোধন করছি : নাসিম । আমাকে আপনারা মাফ করবেন</a>
                        </div>
                        <div class="top-news col-12 col-auto">
                            <a href="#">কাল মেসির বিয়ে, এই নিয়ে ঘুম নেই নেইমারের। </a>
                        </div>
                        <div class="top-news col-12 col-auto">
                            <a href="#">খালেদাকে আজীবন জেলে রাখতে চান, সাবেক নেত্রী এরশাদ ।</a>
                        </div>
                        <div class="top-news col-12 col-auto">
                            <a href="#">কেকা আপার রান্না খেয়ে সর্গে চলে গেলেন জনপ্রিয় অভিনেতা Bond James Bond</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu" >

            <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="icon-home"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">প্রথম পাতা</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">স্থানীয়-২</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">মহানগর</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">সম্পাদকীয়</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">জেলা-উপজেলা-গ্রাম</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">অর্থনীতি</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">আন্তর্জাতিক</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">বিনোদন</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">খেলাধুলা</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">স্থানীয় -১০</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">শেষ পাতা</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#Modal" href="#"><i class="icon-search"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--Modal-->
        <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search Box</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="#" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Search Here :</label>
                            <input type="text" name="search" class="form-control" placeholder="Search">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--End Of Modal-->
    </header>
    <div class="home-page">
        <div class="row">
            <div class="col-12 col-auto col-lg-9 col-md-9 col-sm-12 col-sm-auto">
                <div class="row">
                    <div class="col-12 col-auto col-lg-8 col-md-8 col-sm-6">
                        <div class="top-news-heading">
                            <h2 class="heading">আর দেখা যাবেনা মার্ভেল এর এই নায়ককে</h2>
                            <span class="sub-heading">অ্যাভেঞ্জারস ইনফিনিটি ওয়ার</span>
                        </div>
                        <div class="top-news-body">
                            <figure>
                                <article>
                                    <img src="images/ironMan2.png" class="img-fluid col-lg-6 no-padding">
                                    বিশ্ব বিখ্যাত অ্যাভেঞ্জারস মুভি তে সবচেয়ে মূল্যবান নায়ক এবং বিশ্বে ব্যয়বহুল নায়ক দের তালিকায় অন্যতম ১জন হলেন  আইরন ম্যান খ্যাত টনি স্টার্ক উরফে রবার্ট ডাওনে জুনিয়র । ধরা হয়েছে আগামি মাসে মুক্তি পাওয়া ইনফিনিটি ওয়ার এ তার সমাপ্তি হতে যাচ্ছে । গোপন সুত্রে জানা গেছে যে টনি স্টার্ক আর মারভেল এর সাথে চুক্তি রাখতে চাচ্ছেন না। তবে চুক্তি শেষ হওয়ার আগে তিনি আইরন ম্যান-৪ টা করে যেতে রাজি হন । প্রায় ২০০ মিলিয়ন ডলার প্রতিটি মুভির জন্যে তিনি নিয়ে থাকেন।<button class="btn btn-sm btn-success"><i class="icon-newspaper"></i> বিস্তারিত</button>
                                </article>
                            </figure>
                        </div>
                    </div>
                    <div class="col-12 col-auto col-lg-4 col-md-4 col-sm-6">
                        <div class="news">
                            <div class="news-heading">
                                <h4>শুভ হোক ঈদযাত্রা</h4>
                                <span>যাত্রা পথে সতর্ক থাকুন</span>
                            </div>
                            <div class="news-body">
                                <figure>
                                    <img src="images/eid.jpg" class="img-fluid">
                                    <article>
                                        আজ থেকে বন্ধ বন্ধ হয়ে যাচ্ছে সরকারি–বেসরকারি সকল ধরণের অফিস। ঘরমুখো মানুষেরা অফিস করেই ছুটবেন স্ব স্ব গন্তব্যে। প্রিয়জনদের সাথে একসাথে .... <button class="btn btn-sm btn-success"><i class="icon-newspaper"></i> বিস্তারিত</button>
                                    </article>
                                </figure>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="all-news">
                    <div class="row">
                        <div class="col-12 col-auto col-lg-4 col-md-4 col-sm-6">
                            <div class="news">
                                <div class="news-heading">
                                    <h4>শুভ হোক ঈদযাত্রা</h4>
                                    <span>যাত্রা পথে সতর্ক থাকুন</span>
                                </div>
                                <div class="news-body">
                                    <figure>
                                        <article>
                                            <img src="images/eid.jpg" class="img-fluid col-lg-6 no-padding">
                                            আজ থেকে বন্ধ বন্ধ হয়ে যাচ্ছে সরকারি–বেসরকারি সকল ধরণের অফিস। ঘরমুখো মানুষেরা অফিস করেই ছুটবেন স্ব স্ব গন্তব্যে। প্রিয়জনদের সাথে একসাথে .... <button class="btn btn-sm btn-success"><i class="icon-newspaper"></i> বিস্তারিত</button>
                                        </article>
                                    </figure>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-auto col-lg-4 col-md-4 col-sm-6">
                            <div class="news">
                                <div class="news-heading">
                                    <h4>শুভ হোক ঈদযাত্রা</h4>
                                    <span>যাত্রা পথে সতর্ক থাকুন</span>
                                </div>
                                <div class="news-body">
                                    <figure>
                                        <article>
                                            <img src="images/eid.jpg" class="img-fluid col-lg-6 no-padding">
                                            আজ থেকে বন্ধ বন্ধ হয়ে যাচ্ছে সরকারি–বেসরকারি সকল ধরণের অফিস। ঘরমুখো মানুষেরা অফিস করেই ছুটবেন স্ব স্ব গন্তব্যে। প্রিয়জনদের সাথে একসাথে .... <button class="btn btn-sm btn-success"><i class="icon-newspaper"></i> বিস্তারিত</button>
                                        </article>
                                    </figure>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-auto col-lg-4 col-md-4 col-sm-6">
                            <div class="news">
                                <div class="news-heading">
                                    <h4>শুভ হোক ঈদযাত্রা</h4>
                                    <span>যাত্রা পথে সতর্ক থাকুন</span>
                                </div>
                                <div class="news-body">
                                    <figure>
                                        <article>
                                            <img src="images/eid.jpg" class="img-fluid col-lg-6 no-padding">
                                            আজ থেকে বন্ধ বন্ধ হয়ে যাচ্ছে সরকারি–বেসরকারি সকল ধরণের অফিস। ঘরমুখো মানুষেরা অফিস করেই ছুটবেন স্ব স্ব গন্তব্যে। প্রিয়জনদের সাথে একসাথে .... <button class="btn btn-sm btn-success"><i class="icon-newspaper"></i> বিস্তারিত</button>
                                        </article>
                                    </figure>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-auto col-lg-4 col-md-4 col-sm-6">
                            <div class="news">
                                <div class="news-heading">
                                    <h4>শুভ হোক ঈদযাত্রা</h4>
                                    <span>যাত্রা পথে সতর্ক থাকুন</span>
                                </div>
                                <div class="news-body">
                                    <figure>
                                        <article>
                                            <img src="images/eid.jpg" class="img-fluid col-lg-6 no-padding">
                                            আজ থেকে বন্ধ বন্ধ হয়ে যাচ্ছে সরকারি–বেসরকারি সকল ধরণের অফিস। ঘরমুখো মানুষেরা অফিস করেই ছুটবেন স্ব স্ব গন্তব্যে। প্রিয়জনদের সাথে একসাথে .... <button class="btn btn-sm btn-success"><i class="icon-newspaper"></i> বিস্তারিত</button>
                                        </article>
                                    </figure>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-auto col-lg-4 col-md-4 col-sm-6">
                            <div class="news">
                                <div class="news-heading">
                                    <h4>শুভ হোক ঈদযাত্রা</h4>
                                    <span>যাত্রা পথে সতর্ক থাকুন</span>
                                </div>
                                <div class="news-body">
                                    <figure>
                                        <article>
                                            <img src="images/eid.jpg" class="img-fluid col-lg-6 no-padding">
                                            আজ থেকে বন্ধ বন্ধ হয়ে যাচ্ছে সরকারি–বেসরকারি সকল ধরণের অফিস। ঘরমুখো মানুষেরা অফিস করেই ছুটবেন স্ব স্ব গন্তব্যে। প্রিয়জনদের সাথে একসাথে .... <button class="btn btn-sm btn-success"><i class="icon-newspaper"></i> বিস্তারিত</button>
                                        </article>
                                    </figure>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-auto col-lg-4 col-md-4 col-sm-6">
                            <div class="news">
                                <div class="news-heading">
                                    <h4>শুভ হোক ঈদযাত্রা</h4>
                                    <span>যাত্রা পথে সতর্ক থাকুন</span>
                                </div>
                                <div class="news-body">
                                    <figure>
                                        <article>
                                            <img src="images/eid.jpg" class="img-fluid col-lg-6 no-padding">
                                            আজ থেকে বন্ধ বন্ধ হয়ে যাচ্ছে সরকারি–বেসরকারি সকল ধরণের অফিস। ঘরমুখো মানুষেরা অফিস করেই ছুটবেন স্ব স্ব গন্তব্যে। প্রিয়জনদের সাথে একসাথে .... <button class="btn btn-sm btn-success"><i class="icon-newspaper"></i> বিস্তারিত</button>
                                        </article>
                                    </figure>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-auto col-lg-3 col-md-3 col-sm-12 col-sm-auto">
                <div class="add">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="w-100 img-fluid" src="images/ad/images.jpg" alt="">
                            </div>
                            <div class="carousel-item">
                                <img class="w-100 img-fluid" src="images/ad/Grameenphone-121.jpg" alt="">
                            </div>
                            <div class="carousel-item">
                                <img class="w-100 img-fluid" src="images/ad/main-qimg-95367b7e4452caed01db18aa75702dc8-c.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="most_view_tab_block">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#most" role="tab" aria-controls="home" aria-selected="true">সর্বাধিক পঠিত</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#last" role="tab" aria-controls="profile" aria-selected="false">সর্বশেষ</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="most" role="tabpanel" aria-labelledby="home-tab">
                            <div class="content-news">
                                <ul>
                                    <li><a href="">সাড়ে তিন বছরের শিশুর কণ্ঠে ‘অপরাধী’</a></li>
                                    <li><a href="">সেলস গার্লের সন্তানের দায়িত্ব নিলেন সালমান</a></li>
                                    <li><a href="">কলকাতায় শুটিংয়ে ব্যস্ত শাকিব-অপু!</a></li>
                                    <li><a href="">ইনফিনিটি ওয়ার টেইলর </a></li>
                                    <li><a href="">সাকিব কালা পারেনা !!!</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="last" role="tabpanel" aria-labelledby="profile-tab">

                            <div class="content-news">
                                <ul>
                                    <li><a href="">সাড়ে তিন বছরের শিশুর কণ্ঠে ‘অপরাধী’</a></li>
                                    <li><a href="">সেলস গার্লের সন্তানের দায়িত্ব নিলেন সালমান</a></li>
                                    <li><a href="">কলকাতায় শুটিংয়ে ব্যস্ত শাকিব-অপু!</a></li>
                                    <li><a href="">ইনফিনিটি ওয়ার টেইলর </a></li>
                                    <li><a href="">সাকিব কালা পারেনা !!!</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="for-e-site">
                    <h3>ই-পেপার</h3>
                    <img src="images/1-23.jpg" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="media-box">
            <div class="row">
                <div class="col-12 col-auto col-lg-5 col-md-5 col-sm-12 col-sm-auto photo-gallery">
                    <h2>পূর্বকোণ ছবিঘর</h2>
                    <div class="image-gallery">
                        <img src="images/ironMan2.png" class="img-fluid">
                    </div>
                    <div class="image-caption">
                        <a href="#">
                            <i class="icon-images"></i>
                            <p>সকল ছবি</p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-auto col-lg-4 col-md-4 col-sm-12 col-sm-auto video-gallery">
                    <h2>ভিডিও সংগ্রহশালা</h2>
                    <div class="videos">
                        <img src="images/ironMan2.png" class="img-fluid">
                    </div>
                    <div class="video-caption">
                        <a href="#">
                            <i class="icon-film"></i>
                            <p>সকল ভিডিও</p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-auto col-lg-3 col-md-3 col-sm-12 col-sm-auto online-vote">

                    <div class="questions">
                        <h3>অনলাইন জরিপ</h3>
                        <strong>আল্লাহ্ তোমার কাছে বিচার দিলাম ...। বিচার কি কবুল হয়েছে ?‌</strong>
                        <form action="">
                            <div class="form-group">
                                <div class="field">
                                    <input type="radio" name="answer" value="yes"><p>হ্যাঁ ।</p>
                                </div>
                                <div class="field">
                                    <input type="radio" name="answer" value="no"><p>না ।</p>
                                </div>
                                <div class="field">
                                    <input type="radio" name="answer" value="no_answer"><p>মন্তব্য নাই।</p>
                                </div>
                            </div>
                            <button class="btn btn-success" type="submit">ভোট দিন</button>
                            <a href="#">ভোটের ফলাফল</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="column">
            <div class="row">
                <div class="col-12 col-auto col-lg-6 col-md-6 col-sm-12 col-sm-auto">
                    <div class="page-column">
                        <div class="column-heading">
                            <h3><i class="icon-newspaper"></i>প্রথম পাতা শিরোনাম</h3>
                        </div>
                        <div class="row">
                            <div class="col-12 col-auto col-lg-6 col-md-6 col-sm-12 col-sm-auto">
                                <div class="news">
                                    <div class="news-heading">
                                        <h4>সাত খুন মাফ</h4>
                                        <span>ভুয়া নিউজ</span>
                                    </div>
                                    <div class="news-body">
                                        <figure>
                                            <article>
                                                আজ থেকে বন্ধ বন্ধ হয়ে যাচ্ছে সরকারি–বেসরকারি সকল ধরণের অফিস। ঘরমুখো মানুষেরা অফিস করেই ছুটবেন স্ব স্ব গন্তব্যে। প্রিয়জনদের সাথে একসাথে আজ থেকে বন্ধ বন্ধ হয়ে যাচ্ছে সরকারি–বেসরকারি সকল ধরণের অফিস। ঘরমুখো মানুষেরা অফিস করেই ছুটবেন স্ব স্ব গন্তব্যে। প্রিয়জনদের সাথে একসাথে .... <button class="btn btn-sm btn-success"><i class="icon-newspaper"></i> বিস্তারিত</button>
                                            </article>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-auto col-lg-6 col-md-6 col-sm-12 col-sm-auto">
                                <div class="page-news-title">
                                    <ul>
                                        <li><a href="">গান গান গেয়ে মারা গেলেন শিল্পী মাহফুজুর রহমান <span class="badge hover-text">পড়ুন</span></a></li>
                                        <li><a href="">সবাই লাইন ধরেন, সবাই গালি দিতে পারবেন --আবুল মাল <span class="badge hover-text">পড়ুন</span></a></li>
                                        <li><a href="">সাকিবকে বাদ দিতে চায় বোর্ড, কিন্তু পারেনা। <span class="badge  hover-text">পড়ুন</span></a></li>
                                        <li><a href="">রোহিঙ্গা দের মুক্তি চায় সারা বিশ্ব, তবে কেও আশ্রয় দিতে চায় না <span class="badge hover-text">পড়ুন</span></a></li>
                                        <li><a href="">রোহিঙ্গা দের মুক্তি চায় সারা বিশ্ব, তবে কেও আশ্রয় দিতে চায় না <span class="badge hover-text">পড়ুন</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-auto col-lg-6 col-md-6 col-sm-12 col-sm-auto">
                    <div class="page-column">
                        <div class="column-heading">
                            <h3><i class="icon-newspaper"></i>স্থানীয়-২ শিরোনাম</h3>
                        </div>
                        <div class="row">
                            <div class="col-12 col-auto col-lg-6 col-md-6 col-sm-12 col-sm-auto">
                                <div class="news">
                                    <div class="news-heading">
                                        <h4>সাত খুন মাফ</h4>
                                        <span>ভুয়া নিউজ</span>
                                    </div>
                                    <div class="news-body">
                                        <figure>
                                            <article>
                                                আজ থেকে বন্ধ বন্ধ হয়ে যাচ্ছে সরকারি–বেসরকারি সকল ধরণের অফিস। ঘরমুখো মানুষেরা অফিস করেই ছুটবেন স্ব স্ব গন্তব্যে। প্রিয়জনদের সাথে একসাথে আজ থেকে বন্ধ বন্ধ হয়ে যাচ্ছে সরকারি–বেসরকারি সকল ধরণের অফিস। ঘরমুখো মানুষেরা অফিস করেই ছুটবেন স্ব স্ব গন্তব্যে। প্রিয়জনদের সাথে একসাথে .... <button class="btn btn-sm btn-success"><i class="icon-newspaper"></i> বিস্তারিত</button>
                                            </article>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-auto col-lg-6 col-md-6 col-sm-12 col-sm-auto">
                                <div class="page-news-title">
                                    <ul>
                                        <li><a href="">গান গান গেয়ে মারা গেলেন শিল্পী মাহফুজুর রহমান <span class="badge hover-text">পড়ুন</span></a></li>
                                        <li><a href="">সবাই লাইন ধরেন, সবাই গালি দিতে পারবেন --আবুল মাল <span class="badge hover-text">পড়ুন</span></a></li>
                                        <li><a href="">সাকিবকে বাদ দিতে চায় বোর্ড, কিন্তু পারেনা। <span class="badge  hover-text">পড়ুন</span></a></li>
                                        <li><a href="">রোহিঙ্গা দের মুক্তি চায় সারা বিশ্ব, তবে কেও আশ্রয় দিতে চায় না <span class="badge hover-text">পড়ুন</span></a></li>
                                        <li><a href="">রোহিঙ্গা দের মুক্তি চায় সারা বিশ্ব, তবে কেও আশ্রয় দিতে চায় না <span class="badge hover-text">পড়ুন</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-area">

        <!--Start Footer First Divider-->
        <div class="row">
            <div class="col-lg-12">
                <div class="divider">
                </div>
            </div>
        </div>
        <!--End Footer First Divider-->


        <!--Start Footer Top Area-->
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-auto">
                <div class="footer-top-left-area">
                    <a href="http://www.dainikpurbokone.net"><img src="images/purbokon.png" alt="Purbokone"/></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-auto">
                <div class="footer-top-middle-area"><span class="icon-pencil"><strong>সম্পাদক: ডা. ম. রমিজউদ্দিন চৌধুরী</strong></span>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-auto">
                <div class="footer-top-bottom-area"><span class="icon-newspaper"><strong>পরিচালনা সম্পাদক: জসিম উদ্দীন চৌধুরী</strong></span>
                </div>
            </div>
        </div>
        <!--End Footer Top Area-->


        <!--Start Footer Middle Area-->
        <div class="ss">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-auto sss">
                    <nav class="footer-middle-TopArea">
                        <div class="middle-icon"><a class="icon-home9" href="http://www.dainikpurbokone.net"></a></div>
                        <ul>
                            <li class="menu_color_"><a class="dynamic" href="http://www.dainikpurbokone.net">নীড়পাতা</a>
                            </li><!--দেশ রাজনীতি বিদেশ বিনোদন খেলা লাইফস্টাইল সাহিত্য-->
                            <li class="menu_color_"><a class="dynamic"
                                                       href="http://www.dainikpurbokone.net/category/প্রথম-পাতা/">প্রথম
                                    পাতা</a></li><!--টেক অ্যান্ড গ্যাজেটস-->
                            <li class="menu_color_"><a class="dynamic"
                                                       href="http://www.dainikpurbokone.net/category/স্থানীয়-২/">স্থানীয়-২</a>
                            </li><!--অন্যান্য কলাম তারুণ্য-->
                            <li class="menu_color_"><a class="dynamic"
                                                       href="http://www.dainikpurbokone.net/category/মহানগর/">মহানগর</a>
                            </li>
                            <li class="menu_color_"><a class="dynamic"
                                                       href="http://www.dainikpurbokone.net/category/সম্পাদকীয়/">সম্পাদকীয়</a>
                            </li>
                            <li class="menu_color_"><a class="dynamic"
                                                       href="http://www.dainikpurbokone.net/category/জেলা-উপজেলা-গ্রাম/">জেলা-উপজেলা-গ্রাম</a>
                            </li>
                            <li class="menu_color_"><a class="dynamic"
                                                       href="http://www.dainikpurbokone.net/category/অর্থনীতি/">অর্থনীতি</a>
                            </li>
                            <li class="menu_color_"><a class="dynamic"
                                                       href="http://www.dainikpurbokone.net/category/আন্তর্জাতিক/">আন্তর্জাতিক</a>
                            </li>
                            <li class="menu_color_"><a class="dynamic"
                                                       href="http://www.dainikpurbokone.net/category/বিনোদন/">বিনোদন</a>
                            </li>
                            <li class="menu_color_"><a class="dynamic"
                                                       href="http://www.dainikpurbokone.net/category/খেলাধুলা/">খেলাধুলা</a>
                            </li>
                            <li class="menu_color_"><a class="dynamic"
                                                       href="http://www.dainikpurbokone.net/category/স্থানীয়-১০/">স্থানীয়-১০</a>
                            </li>
                            <li class="menu_color_"><a class="dynamic"
                                                       href="http://www.dainikpurbokone.net/category/শেষের-পাতা/">শেষের
                                    পাতা</a></li>
                        </ul>

                    </nav>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-auto sss">
                    <div class="footer-middle-MiddleArea" style="padding: 15px 10px 6px 0;">
                        <span style="font-size: 17px;">সম্পাদক: ডা. ম. রমিজউদ্দিন চৌধুরী <br>
দি পূর্বকোণ লিমিটেড এর পক্ষে <br>
পরিচালনা সম্পাদক জসিম উদ্দীন চৌধুরী কর্তৃক প্রকাশিত <br>
ও নিউজ মিডিয়া সার্ভিসেস, ৯৭১/এ সিডিএ এভেনিউ,<br>
পূর্ব নাসিরাবাদ, চট্টগ্রাম হতে মুদ্রিত।</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-auto">
                    <div class="footer-middle-BottomArea"
                         style="text-align:center;color:#fff;font-family: Arial, Helvetica, sans-serif;padding-top:16px;">
                <span style="font-size: 12px">ফোন: পিএবিএক্স ৬৫০৯০৯, ৬৫১৯০৬, ৬৫১৯৬৮, ৬৫১৮৮৭ <br>
ফ্যাক্স: ৬৫৪০১১, e-mail: news@dainikpurbokone.net<br>
৯৭১/এ, সিডিএ এভেনিউ, পূর্ব নাসিরাবাদ, চট্টগ্রাম। ফোন: ৬৫০৯০৯, ৬৫১৯৬৮<br>
ঢাকা ব্যুরো: পুরানা পল্টন লেইন, ঢাকা ১০০০। ফোন: ৯৩৩২৬৫৭, ৮৩৫৯৩৮২</span>
                    </div>
                </div>
            </div>
        </div>
        <!--End Footer Middle Area-->


        <!--Start Footer Second Divider-->
        <div class="row">
            <div class="col-lg-12">
                <div class="dividerBottom">
                </div>
            </div>
        </div>
        <!--End Footer Second Divider-->


        <!--Start Footer Bottom Area-->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12 col-auto">
                <div class="footer-bottom-area"><span>অনলাইন সংস্করণের দায়িত্বে নিয়োজিত <em><a
                                    href="https://www.facebook.com">Our company name</a></em>	কপিরাইট © 2018 দৈনিক পূর্বকোণ</span>
                </div>
            </div>
        </div>
        <!--Start Footer Bottom Area-->

    </footer>
</div>


<script src="js/jquery-3.3.1.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/owl.carousel.min.js"></script>

<script>
    $(document).ready(function () {
        $("#owl-demo").owlCarousel({
            items:1,
            loop:true,
            autoplay:true,
            dots:false
        });
    });

    window.onscroll = function() {myFunction()};

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("fixed-top")
        } else {
            navbar.classList.remove("fixed-top");
        }
    };
</script>
</body>
</html>