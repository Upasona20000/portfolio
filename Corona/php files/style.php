<style type="text/css">
	*{ margin:0; padding:0; box-sizing: border-box; font-family: 'Mulish', sans-serif; }
html{
	scroll-behavior:smooth;
}
.nav_style{
	background-color: #fc8698!important;
}
.nav_style a{
	color:#ffffff!important;
	font-weight:bold;
}
.nav_style span{
	color:#ffffff!important;
}
.dropdown-menu{
	background-color: #fc8698!important;
	border:none;
}
.nav_style .dropdown-item
{
	color:#ffffff;
	font-weight:bold;
}
.nav_style .dropdown-menu a:hover{
	color:#ffffff;
	font-weight:bold;
	background-color: #fc8698!important;
}

#myBtn{
	display:none;
	position:fixed;
	bottom:30px;
	right:40px;
	z-index:99;
	border:none;
	outline:none;
	background-color: #00a8ff;
	color:#ffffff;
	cursor: pointer;
	padding:10px;
	border-radius: 10px;
}
#myBtn:hover{
	background:#606060;
}

/**************** main header***************/
.main_header{
	height:450px;
	width:100%;
}
.rightside h1{
	font-size:3rem;
}
/**************** corona updates ***************/
.corona_updates{
	margin:0 0 30px 0;
}
.corona_updates h3{
	color:#de7373;
}
.corona_updates h1{
	font-size: 2rem;
	text-align: center;
}
.section_header h1{
	color:#e33460;
}
/**************** about section ***************/
.sub_section{
	background-color: #f5e9ec;
}
.prevention h1{
	color:#eb7734;
}

/****************footer****************/
.footer{
	background-color: #24262b;
	padding:60px 0;
}
.footer_container{
	max-width: 1170px;
	margin:auto;
}
.footer_row{
	display:flex;
	flex-wrap:wrap;
}
ul{
	list-style: none;
}
.footer-col{
	width:33%;
	padding:0 15px;
}
.footer-col h4{
    font-size: 20px;
    color:#ffffff;
    text-transform: capitalize;
    margin-bottom: 35px;
    font-weight:bold;
    position:relative;
}
.footer-col h4::before{
	content:'';
	position:absolute;
	left:0;
	bottom:-10px;
	background-color:#e91e63 ;
	height:2px;
    box-sizing: border-box;
    width:45px;
}
.footer-col ul li:not(:last-child){
	margin-bottom:10px;
}
.footer-col ul li a{
	font-size:17px;
	text-transform: capitalize;
	color:#ffffff;
	text-decoration:none;
	font-weight:300;
	color:#bbbbbb;
	display:block;
	transition:all 0.3s ease;
}
.footer-col ul li a:hover{
	color:#ffffff;
	padding-left: 10px;
}
.footer-col .social-link a{
	display:inline-block;
	height:40px;
	width:40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius:50%;
	color:#ffffff;
	transition:all 0.5s ease;
}
.footer-col .social-link a:hover{
	color:#24262b;
	background-color: #ffffff;
}
.footer_style{
	margin-bottom: 0!important;
}

/*responsive*/
@media(max-width:767px){
.footer-col{
	width:50%;
	margin-bottom:30px;
}

}
@media(max-width:574px){
.footer-col{
	width:100%;
	margin-bottom:30px;
}
.main_header{
	height:700px;
	text-align: center;
}
.main_header h1{
	text-align:center;
	padding:0;
	width:100%;
	font-size:30px;
}
}


</style>