<!DOCTYPE html>
<html lang="en">
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: sans-serif, arial !important;
    transition: 0.5s all ease;
    -webkit-transition: 0.5s all ease;
    -moz-transition: 0.5s all ease;
    -ms-transition: 0.5s all ease;
    -o-transition: 0.5s all ease;
}

html {
    font-size: 62.5%;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-weight: normal;
    margin-top: 1rem;
    margin-bottom: 1rem;
}

a {
    text-decoration: none;
}

ul {
    list-style-type: none;
}

p {
    line-height: 150%;
    margin-bottom: 1rem;
}

.fix {
    overflow: hidden;
}

.container_full {
    width: 100%;
}

.container {
    width: 98rem;
    margin: 0 auto;
}

.header_bg {
    background-color: #292929;
}

#header {}

#header .left_logo {
    float: left;
    color: #fff;
}

#header .left_logo h1 {
    font-family: 'Lato', sans-serif;
    font-weight: bold;
    font-size: 4rem;
}

#header nav {
    float: right;
}

#header nav #menu {}

#header nav #menu li {
    float: left;
    margin-right: 1rem;
    border-right: 0.15rem solid #1E1E1E;
}

#header nav #menu li:first-child {
    border-left: 0.15rem solid #1E1E1E;
}

#header nav #menu li a {
    display: block;
    color: #fff;
    font-family: 'Lato', sans-serif;
    font-weight: bold;
    font-size: 16px;
    padding: 4rem 3rem;
}

#header nav #menu li a:hover {
    color: #41c84e;
    border-bottom: .5rem solid #41c84e
}

#header nav #menu li.active a {
    border-bottom: 0.5rem solid #41c84e;
    color: #41c84e;
}

/*Mobile-View*/

.mobile-view{
    display: none;
    margin-top: 1.5rem;
}
.mobile-view span{
    color: #fff;
    font-size: 2.5rem;
    float: right;
    cursor: pointer;
}
.mobile-view .close-btn{
    color: #fff;
    font-size: 3.5rem;
}
.mobile-view .overlay{
    width: 0;
    color: #fff;
    height: 100%;
    top: 0;
    left: 0;
    position: fixed;
    background: rgb(0, 0, 0,0.85);
    overflow-x: hidden;
    z-index: 1;
    transition: 0.5s;
    -webkit-transition: 0.5s;
    -moz-transition: 0.5s;
    -ms-transition: 0.5s;
    -o-transition: 0.5s;
}
.overlay .overlay-content{
    position: relative;
    width: 100%;
    text-align: center;
    top: 15%;
    margin-top: 3rem;
}
.overlay .overlay-content a{
    color: #999;
    font-size: 3.5rem;
    display: block;
    text-transform: uppercase;
    letter-spacing: 0.3rem;
    padding: 1.2rem 0;
}
.overlay .overlay-content a:hover{
    color: #fff;
}
.overlay .close-btn{
    position: absolute;
    right: 4.5rem;
    top: 2rem;
    font-size: 3.5rem;
    float: right;


}


.content_border {
    border-top: .5rem solid #1E1E1E;
    margin-top: -.5rem;
    border-bottom: 0.1rem solid #E1E0E0;
}

.content_wrapper {
    border-left: 0.1rem solid #E1E0E0;
    border-right: 0.1rem solid #E1E0E0;
    overflow: hidden;
    padding-top: 7.5rem;
}

.left_content {
    width: 62rem;
    float: left;
    margin-right: 7rem;
}

.left_content .single_article {
    margin-bottom: 7rem;
}

.left_content .single_article img {
    width: 62rem;
    height: 30.8rem;
}

.left_content .single_article h2 {
    font-family: 'Lato', sans-serif;
    font-weight: bold;
    font-size: 2.8rem;
    text-transform: uppercase;
    padding-left: 1.5rem;
    padding-top: 1.5rem;
    color: #4F4E4E;
}

.left_content .single_article p {
    font-family: 'Lato', sans-serif;
    font-weight: normal;
    font-size: 1.6rem;
    padding-left: 1.5rem;
    padding-top: 3rem;
    color: #606060;
}

.left_content .single_article .continue_reading {
    font-family: 'Lato', sans-serif;
    font-weight: bold;
    font-size: 1.6rem;
    color: #C2C1C1;
    padding: 1rem 3.5rem;
    border: 0.1rem solid #C2C1C1;
    margin-left: 2rem;
    display: inline-block;
    border-radius: 2.5rem;
    -webkit-border-radius: 2.5rem;
    -moz-border-radius: 2.5rem;
    -ms-border-radius: 2.5rem;
    -o-border-radius: 2.5rem;
}

.sidebar_wrapper {
    float: right;
    width: 28rem;
}

.sidebar_wrapper .single_sidebar {
    margin-bottom: 2rem;
    overflow: hidden;
}

.sidebar_wrapper .single_sidebar h2 {
    font-family: 'Lato', sans-serif;
    font-weight: bold;
    font-size: 1.6rem;
    color: #888686;
    border: 0.1rem solid #C2C1C1;
    border-left: 0.4rem solid #41c84e;
    text-transform: uppercase;
    background: #F8F8F8;
    padding: 1rem 2rem;
    margin-bottom: 1.5rem;
}

.sidebar_wrapper .single_sidebar p {
    font-family: 'Lato', sans-serif;
    font-size: 1.6rem;
    color: #737373;
    width: 95%;
    margin-left: 1rem;
    text-align: justify;
}

.sidebar_wrapper .single_sidebar .search_box {
    float: right;
    width: 26.9rem;
    height: 5rem;
    border: 0.1rem solid #C2C1C1;
    border-right: none;
}

.sidebar_wrapper .single_sidebar input[type="email"] {
    float: right;
    width: 26.9rem;
    height: 5rem;
    border: 0.1rem solid #C2C1C1;
    border-right: none;
}

.email_submit {
    position: relative;
}

.email_submit input {
    width: 27.8rem;
    height: 5rem;
    border: 0.1rem solid #C2C1C1;
}

.email_submit input[type="submit"] {
    float: right;
    background: url(image/right-arrow.png) no-repeat;
    background-size: 3.6rem 3.6rem;
    width: 3.6rem;
    height: 3.6rem;
    position: absolute;
    text-indent: -99999rem;
    border: none;
    top: 0.8rem;
    right: 1.1rem;
    cursor: pointer;
}

.single_sidebar input[type="text"],
.single_sidebar input[type="email"] {
    padding-left: 1rem;
}

.content_bottom {
    border: .1rem solid #E1E0E0;
    overflow: hidden;
    padding: 2.5rem 0;
}

.content_bottom a {
    color: #C2C1C1;
    font-size: 1.8rem;
    font-family: "lato";
    font-weight: bold;
    text-transform: uppercase;
}

.content_bottom .previous {
    float: left;
    margin-left: 2rem;
}

.content_bottom .next {
    float: right;
    margin-right: 2rem;
}

#footer {
    text-align: center;
}

#footer h1 {
    font-family: "lato";
    font-weight: bold;
    font-size: 4rem;
    color: #292929;
}

#footer p {
    font-family: "lato";
    font-size: 1.3rem;
    color: #a6a6a6;
}

.social_icon ul li {
    display: inline-block;
    margin: 0 1rem;
}

.social_icon ul li.facebook a {
    display: block;
    width: 4rem;
    height: 4rem;
    background: url(image/fb1.png) no-repeat;
}

.social_icon ul li.facebook:hover a {
    background: url(image/fb.png) no-repeat;
}

.social_icon ul li.twitter a {
    display: block;
    width: 4rem;
    height: 4rem;
    background: url(image/tw.png) no-repeat;
}

.social_icon ul li.twitter:hover a {
    background: url(image/tw1.png) no-repeat;
}
img{
    width: 100%;
    height: auto;
}


@media only screen and (max-width:1024px){
    .container{
        width: 95%;
    }
    #menu{
        display: none;
    }

    
    html{
        font-size:57.5%;
    }

    .mobile-view{
        display: block;
    }


}
@media only screen and (max-width:980px){
    
    html{
        font-size: 52.5%;
    }
    h1{
        font-size: 3.2rem;
    }
     h2{
        font-size: 2.2rem;
    }

    .left_content{
        float: none;
        margin-right: 0;
        width: 100%;
        text-align: center;
        border-bottom: 0.1rem solid #C2C1C1;
    }
    .sidebar_wrapper{

        float: none;
        width: 70%;
        text-align: center;
        margin: 0 auto;
     
    }
    .left_content .single_article p{
        padding:  2.5rem;
        text-align: justify;
    }
    .sidebar_wrapper .single_sidebar p{
        width: 92%;
        padding: 0 1rem ;
    }

    .sidebar_wrapper .single_sidebar .search_box{
        border: 0.1rem solid #C2C1C1;
        float: none;
        width: 100%;
        border-radius: 0.5rem;
        -webkit-border-radius: 0.5rem;
        -moz-border-radius: 0.5rem;
        -ms-border-radius: 0.5rem;
        -o-border-radius: 0.5rem;
    }

    .sidebar_wrapper .single_sidebar input[type="email"]{
        border: 0.1rem solid #C2C1C1;
        float: none;
        width: 100%;
        border-radius: 0.5rem;
        -webkit-border-radius: 0.5rem;
        -moz-border-radius: 0.5rem;
        -ms-border-radius: 0.5rem;
        -o-border-radius: 0.5rem;
    }

}

@media only screen and (max-width:768px){
    html{
        font-size: 52.5%;
    }
    h1{
        font-size: 2rem;
    }
    h2{
        font-size: 1.5rem;
    }

    .left_content{
        width: 93%;
    }
    .sidebar_wrapper{
        width: 75%;
     
    }

    .content_bottom{
        padding: 1.5rem 0;
    }
    #footer h1{
        font-size: 2.5rem;
    }
}

@font-face{
	font-family:"lato";
	src:url("../font/lato.eot") format("eot"),
	url("../font/lato.woff") format("woff"),
	url("../font/lato.ttf") format("truetype"),
	url("../font/lato.svg#lato") format("svg");
}

</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>firstci</title>

    <link rel="stylesheet" href="css/font.css">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

    <div class="container_full header_bg">
        <div class="fix container">
            <header id="header">
                <div class="left_logo">
                    <h1>firstci</h1>
                </div>
                <nav>
                    <ul id="menu">
                        <li class="active"><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Work</a></li>
                        <li><a href="">Team</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                    <div class="mobile-view">
                        <span onclick="openNav()">&#9776</span>
                        <div id="myNav" class="overlay">
                            <a href="javascript:void()" onclick="closeNav()" class="close-btn">&times;</a>
                            <div class="overlay-content">
                                <a onclick="closeNav()" href="">Home</a>
                                <a onclick="closeNav()" href="">About</a>
                                <a onclick="closeNav()" href="">Work</a>
                                <a onclick="closeNav()" href="">Team</a>
                                <a onclick="closeNav()" href="">Contact</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
    </div>

    <div class="container_full content_border">
        <div class="fix container">
            <div class="content_wrapper">
                <section class="left_content">
                    <article class="single_article">
                        <img src="image/article-image.png" alt="">
                        <h2>Duis aute irure dolor in henderit in voluptat</h2>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipop ex ea
                            commo doconsequat,
                            sunt in culpa qui officia deserunt mollit anim id est laborum.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur...
                        </p>
                        <a class="continue_reading" href="#">Continue Reading</a>
                    </article>
                    <article class="single_article">
                        <img src="image/article.png" alt="">
                        <h2>Duis aute irure dolor in henderit in voluptat</h2>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipop ex ea
                            commo doconsequat,
                            sunt in culpa qui officia deserunt mollit anim id est laborum.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur...
                        </p>
                        <a class="continue_reading" href="#">Continue Reading</a>
                    </article>
                </section>
                <div class="sidebar_wrapper">
                    <aside class="single_sidebar">
                        <h2>About Blogin</h2>
                        <p>
                            Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                        <p>
                            Excepteur sint occaecat sunt in culpa qui
                            officia deserunt mollit anim id est laborum.
                        </p>

                    </aside>
                    <aside class="single_sidebar">
                        <h2>Search</h2>
                        <input type="text" class="search_box" placeholder="What are you looking for...">

                    </aside>
                    <aside class="single_sidebar">
                        <h2>STAY TUNED</h2>
                        <div class="email_submit">
                            <input type="email" class="" placeholder="Your email">
                            <input type="submit" id="search_submit">
                        </div>


                    </aside>
                </div>
            </div>
            <div class="content_bottom">
                <a href="#" class="previous">&larr; Previous</a>
                <a href="#" class="next">Next &rarr;</a>
            </div>
        </div>
    </div>


    <div class="container_full">
        <div class="fix container">
            <footer id="footer">
              

                <div class="social_icon">
                    <ul>
                        <li class="facebook"><a href=""></a></li>
                        <li class="twitter"><a href=""></a></li>
                        <li class="facebook"><a href=""></a></li>
                    </ul>
                </div>

            </footer>
        </div>
    </div>

    <!--
        
    <div class="container_full">
        <div class="fix container">
            
        </div>
    </div>
    -->
<script>

function openNav(){
    document.getElementById('myNav').style.width="100%";
}

function closeNav(){
    document.getElementById('myNav').style.width="0%";
}
</script>
</body>

</html>