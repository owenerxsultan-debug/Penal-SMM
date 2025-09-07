<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="big5">

    <base href="<?= site_url() ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title>
<?= $settings["site_name"] ?>
    </title>

   
    

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

    <link rel="stylesheet" type="text/css" href="public/admin/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="public/admin/style.css">
    <link rel="stylesheet" type="text/css" href="public/admin/toastDemo.css">
	<link rel="stylesheet" type="text/css" href="public/admin/tooltip.css">
	
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.css">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.css">


    <link rel="stylesheet" type="text/css" href="public/admin/tinytoggle.min.css" rel="stylesheet">
 <link rel="stylesheet" href="public/admin/iziToast.min.css">
  <script src="https://kit.fontawesome.com/f9fbee3ddf.js" crossorigin="anonymous"></script>
<script src="public/admin/iziToast.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="//gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">
<link rel="stylesheet" href="https://itsjavi.com/fontawesome-iconpicker/dist/css/fontawesome-iconpicker.min.css">
<link rel="stylesheet" href="css/admin/image-picker.css">
	<link href="css/admin/main.css" type="text/css" rel="stylesheet">
  <script type="text/javascript" src="//code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>




    <style>
 @import url("https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@600&display=swap");
#loading {
position: fixed;
display: flex;
justify-content: center;
align-items: center;
width: 100%;
height: 100%;
top: 0;
left: 0;
opacity: 0.7;
background-color: #fff;
z-index: 99;
}

.notification-badges {
  li {
    display:inline-block;
    min-width:50px;
    height:50px;
    border:solid 1px #ccc;
    vertical-align:top;
    margin:10px;
    text-align:center;
    line-height:50px;
    padding:5px;    
  }  
  [data-badge] {
    position:relative;     
    &:after {
      position:absolute;
      right:-10px;
      top:-10px;
      min-width:10px;
      min-height:10px;
      line-height:10px;
      padding:5px;
      color:#fff;
      background-color:#bf1f1f;
      font-size:10px;
      border-radius:20px;
      content:attr(data-badge);
      border:solid 1px #c93a3a;
    }   
  }  
}

#loading-image {
z-index: 100;
}

#buy-smm {
margin: 8px 15px;
font-size: 15px;
font-weight: 400;
}

#buy-smm a {
cursor: pointer;
}

a , body.dark-mode  a{
    color: #2176FF;
    text-decoration: none;
}


.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {

    color: #fff;
    background-color: #2176FF;
}

.nav-pills>li >a:focus, .nav-pills>li >a:hover {
    color: #fff;
    background-color: #2176FF;
}

.btn-primary  {
   background-color: #2176FF;
}
.text-primary {
    color:#2176FF;
}
.btn-primary:hover, .btn-primary:focus  {

   background-color: #2176FF;

}

body.dark-mode .nav-pills>li.active>a, body.dark-mode .nav-pills>li.active>a:focus, body.dark-mode .nav-pills>li.active>a:hover {
    color: #fff;
    background-color: #2176FF;
}


body .checkAll-holder {
    padding: 4px 7px 3px 5px;
    padding-bottom: 5px !important;
    border: 1px solid #ddd;
    line-height: 0;
    z-index: 2;
    position: relative;
    border-radius: 4px;
    width: 28px;
}
.badge-success {

background-color: #198754!important;
}
.badge-error,.badge-danger{
    background-color: #dc3545!important;
}

.badge-warning {
    background-color: #ffc107!important;
}

.badge-info {
    background-color: #0dcaf0!important;
}
.badge-primary {
    background-color : #0d6efd !important;
}

body.dark-mode .btn-primary {

    background-color: #2176FF;
    border-color: #2176FF;
    color: #fff;
}


body.dark-mode .list-group-item.active, body.dark-mode .list-group-item.active:focus, body.dark-mode .list-group-item.active:hover {
    z-index: 2;
    color: #fff;
    background-color: #2176FF;
    border-color: #2176FF;
}

body.dark-mode ul.thumbnails.image_picker_selector li .thumbnail {
    border: 2px solid rgba(255,255,255,0.3);
}


body.dark-mode ul.thumbnails.image_picker_selector li .thumbnail.selected {
    border: 2px solid #3CCF4E;
}


.thumbnail {
    background-color: transparent;
}


body.dark-mode .btn-primary.focus, body.dark-mode .btn-primary:focus {
    background-color: #2176FF;
    border-color: #2176FF;
    color: #fff;
}





.text-danger {
    color:#D90429;
}

body.dark-mode .btn-danger {
    color: #fff;
    background-color: #D90429;
    border-color: #D90429;
}

.btn-danger {
    background-color: #D90429;
}

.text-success {
    color:#3CCF4E;
}
.btn-success {
    background-color: #3CCF4E;
}

.btn-primary.active, .btn-primary:active, .open>.dropdown-toggle.btn-primary {
    color: #fff;
    background-color: #2176FF;
    border-color: #2176FF;
}



.btn-primary.active.focus, .btn-primary.active:focus, .btn-primary.active:hover, .btn-primary:active.focus, .btn-primary:active:focus, .btn-primary:active:hover, .open>.dropdown-toggle.btn-primary.focus, .open>.dropdown-toggle.btn-primary:focus, .open>.dropdown-toggle.btn-primary:hover {
    color: #fff;
    background-color: #2176FF;
    border-color: #2176FF;
}


body.dark-mode .btn-primary.active.focus, body.dark-mode .btn-primary.active:focus, body.dark-mode .btn-primary.active:hover, body.dark-mode .btn-primary:active.focus, body.dark-mode .btn-primary:active:focus,body.dark-mode .btn-primary:active:hover, body.dark-mode .open>.dropdown-toggle.btn-primary.focus,body.dark-mode .open>.dropdown-toggle.btn-primary:focus,body.dark-mode .open>.dropdown-toggle.btn-primary:hover {
    color: #fff;
    background-color: #2176FF;
    border-color: #2176FF;
}





.hideextra { white-space: nowrap; overflow: scroll;}
   

.info-msg,
.success-msg,
.warning-msg,
.error-msg {
  margin: 10px 0;
  padding: 10px;
  border-radius: 3px 3px 3px 3px;
}
.info-msg {
  color: #059;
  background-color: #BEF;
}
.success-msg {
  color: #270;
  background-color: #DFF2BF;
}
.warning-msg {
  color: #9F6000;
  background-color: #FEEFB3;
}
.error-msg {
  color: #D8000C;
  background-color: #FFBABA;
}

.set-currency {
    font-family: "Sansita Swashed", cursive;
  border-left: 5px solid #FF1D58;
  padding: 10px;
  letter-spacing: 5px;
  font-weight: bold;
  padding-left: 10px;
}

.sansita {
    font-family: "Sansita Swashed", cursive;
}
.set-currency.b-blue {
   border-left: 5px solid #4285F4;
}
.disabledDiv {

    pointer-events: none;

    opacity: 0.4;
}

.select {
 
  padding: 7px 40px 7px 12px;
  width: 100%;
  border: 1px solid #e8eaed;
  border-radius: 5px;
  background: #fff;
  box-shadow: 0 1px 3px -2px #9098a9;
  cursor: pointer;
  font-family: inherit;
  font-size: 16px;
  transition: all 150ms ease;
}


.select:required:invalid {
  color: #5a667f;
}
.select option {
  color: #223254;
}
.select option[value=""][disabled] {
  display: none;
}
.select:focus {
  outline: none;
  border-color: #07f;
  box-shadow: 0 0 0 2px rgba(0,119,255,0.2);
}
.select:hover + svg {
  stroke: #07f;
}

.form-control:focus {

  outline: none;

  border-color: #07f;
  box-shadow: 0 0 0 2px rgba(0,119,255,0.2);
}

.curr_conv {
   border:1px solid lightgrey;
   border-radius:5px;
}
.toggle {
  align-items: center;
  border-radius: 100px;
  display: flex;
  float:right;
  font-weight: 700;
  margin-top:-3px;
}


.toggle__input {
  clip: rect(0 0 0 0);
  clip-path: inset(50%);
  height: 1px;
  overflow: hidden;
  position: absolute;
  white-space: nowrap;
  width: 1px;
}
.toggle__input:not([disabled]):active + .toggle-track, .toggle__input:not([disabled]):focus + .toggle-track {
  border: 1px solid transparent;
  box-shadow: 0px 0px 0px 2px #121943;
}
.toggle__input:disabled + .toggle-track {
  cursor: not-allowed;
  opacity: 0.7;
}

.toggle-track {
  background: #fff;
  border: 1px solid #000000;
  border-radius: 100px;
  cursor: pointer;
  display: flex;
  height: 30px;
  margin-right: 12px;
  position: relative;
  width: 60px;
}

.toggle-indicator {
  align-items: center;
  background:#ff4444;
  border-radius: 24px;
  bottom: 2px;
  display: flex;
  height: 24px;
  justify-content: center;
  left: 2px;
  outline: solid 2px transparent;
  position: absolute;
  transition: 0.25s;
  width: 24px;
}


.checkMark {
  fill: #fff;
  height: 20px;
  width: 20px;
  opacity: 0;
  transition: opacity 0.25s ease-in-out;
}



.toggle__input:checked + .toggle-track .toggle-indicator {
  background: #00C851;
  transform: translateX(30px);
}
.toggle__input:checked + .toggle-track .toggle-indicator .checkMark {
  opacity: 1;
  transition: opacity 0.25s ease-in-out;
}


@media screen and (-ms-high-contrast: active) {
  .toggle-track {
    border-radius: 0;
  }
}


.form__group{
  padding:0.5rem;
}
.form__controls{
  margin-top:.2rem;
}
.form__input{
  width:100%;

}
.form__submit{
  margin-top: .5rem;
  width: 10rem;
  height: 3rem;
}

.grid{
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
.grid__col{
  flex-basis: 50%;
}


.button-1 {
  background-color: #EA4C89;
  border-radius: 8px;
  border-style: none;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  font-weight: 500;
  height: 40px;
  line-height: 20px;
  list-style: none;
  margin: 0;
  outline: none;
  padding: 10px 16px;
  position: relative;
  text-align: center;
  text-decoration: none;
  vertical-align: baseline;
  user-select: none;
  -webkit-user-select: none;
}
.add-currency {
    background-color: #439A97;
    float:right;
}





.loader,
.loader:after {
  border-radius: 50%;
  width: 10em;
  height: 10em;
}
.loader {
  font-size: 5px;
  position: relative;
  text-indent: -9999em;
  border-top: 0.7em solid rgba(55, 114, 255, 0.2);
  border-right: 0.7em solid rgba(55, 114, 255, 0.2);
  border-bottom: 0.7em solid rgba(55, 114, 255, 0.2);
  border-left: 0.7em solid rgb(55, 114, 255);
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-animation: load8 1.1s infinite linear;
  animation: load8 0.8s infinite linear;
}

body.dark-mode .loader {
  border-top: 0.7em solid rgba(255, 22, 84, 0.2);

  border-right: 0.7em solid rgba(255, 22, 84, 0.2);

  border-bottom: 0.7em solid rgba(255, 22, 84, 0.2);
  border-left: 0.7em solid rgb(255, 22, 84);
}
@-webkit-keyframes load8 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes load8 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@media screen and (min-width : 906px){
 .navbar-header {
  display:none;
  }
}


.list-group-item.active, .list-group-item.active:focus, .list-group-item.active:hover {
    z-index: 2;
    color: #fff;
    background-color: #2176FF;
    border-color: #2176FF;
}
.carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
    display: block;
    max-width: 40px;
    height: 40px;
}
ul.thumbnails.image_picker_selector li .thumbnail {
    padding: 3px;
    border: 2px solid #DDD;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
}

ul.thumbnails.image_picker_selector li .thumbnail.selected {
    border : 2px solid #3CCF4E;
    border-radius:4px;
    background: none;
}
ul.thumbnails.image_picker_selector li {
    margin: 0px 4px 4px 0px;
}

 .services-table {
    overflow-x: scroll;
    overflow-y: visible;
 }
.service-block__header {
    width:calc(100% + 50px);
}
.service-block__category {
    width:calc(100% + 50px);
}
.category-visibility {
    width: 14px;
    height: 14px;
    border-radius:50%;
    display:inline-block;
    margin-right : 10px;
    cursor:pointer;
}
body.dark-mode .card {
    background-color: #020202;
}
.category-visibility.category-visible {
    background-color: rgb(0, 128, 1);
    box-shadow: 0 0 0 2px #95c794;
}

.category-visibility.category-invisible {
    background-color: #fe0000;
    box-shadow:0 0 0 2px #f99394;
}
.spinner_2 {
  pointer-event: none;
  -webkit-animation: rotate 1.5s linear infinite;
  animation: rotate 1.5s linear infinite;
  width: 3.2rem;
  height: 3.2rem;
  transition: opacity 0.3s linear 0.15s;
  margin-right : 10px;

}

.spinner_2.large {
    width: 4rem;

  height: 4rem;
}

.spinner_2.medium {
    width: 2.5rem;
  height: 2.5rem;
}

.spinner_2.small {
    width: 1.6rem;
  height: 1.6rem;
}



 .spinner_2 .path_2 {
  stroke: #007bff;
  stroke-linecap: round;
  -webkit-animation: dash_1 1.5s ease-in-out infinite;
  animation: dash_1 1.5s ease-in-out infinite;
}

@-webkit-keyframes rotate {
  100% {
    transform: rotate(360deg);
  }
}

@keyframes rotate {
  100% {
    transform: rotate(360deg);
  }
}
@-webkit-keyframes dash_1 {
  0% {
    stroke-dasharray: 1, 150;
    stroke-dashoffset: 0;
  }
  50% {
    stroke-dasharray: 90, 150;
    stroke-dashoffset: -35;
  }
  100% {
    stroke-dasharray: 90, 150;
    stroke-dashoffset: -124;
  }
}
@keyframes dash_1 {
  0% {
    stroke-dasharray: 1, 150;
    stroke-dashoffset: 0;
  }
  50% {
    stroke-dasharray: 90, 150;
    stroke-dashoffset: -35;
  }
  100% {
    stroke-dasharray: 90, 150;
    stroke-dashoffset: -124;
  }
}

.spinner-border-sm {
    width: 1rem;
    height: 1rem;
    border-width: .2em;
}
.spinner-border {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    vertical-align: text-bottom;
    border: .25em solid currentColor;
    border-right-color: transparent;
    border-radius: 50%;
    -webkit-animation: spinner-border .75s linear infinite;
    animation: spinner-border .75s linear infinite;
}

@keyframes spinner-border {
100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
}
}


.img-responsive {
    max-width: calc(1em + 10px);
    max-height: calc(1em + 10px);
}

.btn-group, .btn-group-vertical {
    position: relative;
    display: inline-block;
}

.img-responsive {
    max-width: 100%;
    height: auto;
}

@media (max-width: 767px) {
    .table-responsive .dropdown-menu {
position: relative !important;
    }
}
li > a.nav-link {
    color:#000;
}
li.active > a.nav-link {
    color:#fff;
}

.navbar-nav a {
    color:#2176FF !important;
}

.navbar-nav li.active {
    background-color: none !important;
}
.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {
    color:#fff !important;
    background-color: #2176FF !important;
}
nav {
  background-color: white;
  height: 65px;
  
}

.navbar {
    position:fixed;
  top:0;
  width:100%;
  z-index:3;
  
}
#menuToggle {
  display: flex;

  flex-direction: column;
  position: fixed;
  top: 15px;
  left: 20px;
  z-index: 999;
  -webkit-user-select: none;
  user-select: none;
}

#menuToggle input
{
  display: flex;
  width: 40px;
  height: 32px;
  position: absolute;
  cursor: pointer;
  opacity: 0;
  z-index: 1000;
}

#menuToggle span
{
  display: flex;
  width: 29px;
  height: 2px;
  margin-bottom: 5px;
  position: relative;
  background: #000;
  border-radius: 3px;
  z-index: 999;
  transform-origin: 5px 0px;
  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
              background 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
              opacity 0.55s ease;
}
body.dark-mode #menuToggle span {
    background:#fff;
}
body.dark-mode .navbar {
   background: #020202;
}
#menuToggle span:first-child
{
  transform-origin: 0% 0%;
}

#menuToggle span:nth-last-child(2)
{
  transform-origin: 0% 100%;
}

#menuToggle input:checked ~ span
{
  opacity: 1;
  transform: rotate(45deg) translate(-3px, -1px);
  background: #000;
}
body.dark-mode #menuToggle input:checked ~ span {
  background: #fff;
}
#menuToggle input:checked ~ span:nth-last-child(3)
{
  opacity: 0;
  transform: rotate(0deg) scale(0.2, 0.2);
}

#menuToggle input:checked ~ span:nth-last-child(2)
{
  transform: rotate(-45deg) translate(0, -1px);
}
#menu
{  
  position: fixed;
  width: 250px;
  height: 100% !important;
 /* box-shadow: 0 0 10px #85888C;*/
 margin-left:-50px;
  margin-top:-25px;
  padding: 30px 0px 0px 30px;
  padding-top: 50px;
  padding-bottom: 20px;
  background-color: #fff;
  -webkit-font-smoothing: antialiased;
  transform-origin: 0% 0%;
  transform: translate(-100%, 0);
  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
  overflow-y: scroll;
  overflow-x:hidden;
}
body.dark-mode #menu {
    background-color: #020202;
}
#menu ul {
    padding-top:10px;
}
#menu li
{ 
  transition-delay: 2s;
  list-style-type: none;
  font-size: 17px;
}
#menuToggle input:checked ~ ul
{
  transform: none;
}
.navbar {
   height: 40px;
   margin-bottom:5px;
}
.nav-item .dropdown-btn .fa-caret-down {
  float: right;
  padding-right: 10px;
  margin-top:2px;
}

.nav-item .dropdown-container {
  display:none;
  background-color: #fff ;
  padding-left: 8px;
}
body.dark-mode .nav-item .dropdown-btn {
    color:#fff;
    background:#020202;
}
body.dark-mode li > a.nav-link {
    color: #fff;
}
body.dark-mode .nav-item .dropdown-container {
    background-color: #020202;
} 
.nav-item .dropdown-container ul li {
    padding-left:2px;
}
.navbar .nav .nav-item a {
    font-weight: bold;
    margin-left:10px;
}
.navbar .nav .nav-item.active a {
    color:rgb(0,0,0) !important;
    background-color: rgba(255, 202, 58);
   
}
body.dark-mode .navbar .nav .nav-item.active a {

    color:#fff !important;
}
.navbar .nav .nav-item a:hover {
    color:rgb(0,0,0);
    background-color: rgba(255, 202, 58);
 
}
.nav-item .dropdown-btn {
padding: 10px 8px 10px 12px;
  text-decoration: none;
  font-size: 17px;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  margin-left:10px;
  font-weight:bold;
}
.nav-item .dropdown-btn[data-expanded="true"] {
  color:rgb(0,0,0);
  background-color: rgba(255, 202, 58);
}
body.dark-mode .nav-item .dropdown-btn[data-expanded="true"] {
  color:#fff;
  background-color: rgba(255, 202, 58);
} 
.nav .nav-item {
    margin-left:-5px;
    
}
.nav .nav-item:hover {
    background-color: #fff;
}
.nav>li>a:focus, .nav>li>a:hover {
    text-decoration: none;
    background-color: transparent;
}
.header-right {
    float:right;
    margin-right:15px;
   

}
.header-right .manager {
    display:inline-block;
    margin-top:5px;
}

.header-right  .switch {
  position: relative;
  display: inline-block;
  width: 55px;
  height: 28px;
  margin-right:10px;
}

.header-right  .switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.header-right .slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}

.header-right .slider:before {
  position: absolute;
  content: "";
  height: 35px;
  width: 35px;
  left: 0px;
  bottom: 4px;
  top: 0;
  bottom: 0;
  margin: auto 0;
  -webkit-transition: 0.4s;
  transition: 0.4s;
  box-shadow: 0 0px 15px #2020203d;
  background: white url('https://i.ibb.co/FxzBYR9/night.png');
  background-repeat: no-repeat;
  background-position: center;
}

.header-right input:checked +  .slider {
  background-color: #2196f3;
}

.header-right input:focus + .slider {
  box-shadow: 0 0 1px #2196f3;
}

.header-right input:checked + .slider:before {
  -webkit-transform: translateX(24px);
  -ms-transform: translateX(24px);
  transform: translateX(24px);
  background: white url('https://i.ibb.co/7JfqXxB/sunny.png');
  background-repeat: no-repeat;
  background-position: center;
}

/* Rounded sliders */
.header-right .slider.round {
  border-radius: 34px;
}

.header-right .slider.round:before {
  border-radius: 50%;
}


.product-card {
  display: flex;
  flex-direction: column;
  align-items: center;
  background-color: #fff;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
  padding: 10px;
  border-radius: 10px;
  transition: all 0.2s ease-in-out;
}

.product-card:hover {
  transform: translateY(-5px);
}

.product-icon img {
  width: 100%;
  max-width: 80px;
  height: 80px;
  object-fit: contain;
}

.product-details {
  margin: 20px 0;
  text-align: center;
}

.product-name {
  font-size: 24px;
  font-weight: bold;
  margin: 0;
  color: #333;
}

.product-price {
  font-size: 18px;
  color: #555;
  margin: 10px 0;
}


.buy-button {
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  transition: all 0.2s ease-in-out;
}

.buy-button:hover {
  background-color: #0069d9;
  transform: scale(1.1);
}

@media (min-width: 768px) {
  .product-card {
    flex-direction: row;
    justify-content: space-between;
  }
  
  .product-icon img {
    max-width: none;
    height: 150px;
  }
  
  .product-details {
    margin: 0;
    text-align: left;
  }
  
  .product-name {
    font-size: 28px;
  }
  
  .product-price {
    font-size: 20px;
  }
}


.switch {
  display: block;
  margin: 12px auto;
}

.switch {
  position: relative;
  display: inline-block;
  vertical-align: top;
  width: 56px;
  height: 20px;
  padding: 3px;
  border-radius: 18px;
}

.switch-input {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}

.switch-label {
  position: relative;
  display: block;
  height: inherit;
  font-size: 10px;
  text-transform: uppercase;
  background: #eceeef;
  border-radius: inherit;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.12), inset 0 0 2px rgba(0, 0, 0, 0.15);
  -webkit-transition: 0.15s ease-out;
  -moz-transition: 0.15s ease-out;
  -o-transition: 0.15s ease-out;
  transition: 0.15s ease-out;
  -webkit-transition-property: opacity background;
  -moz-transition-property: opacity background;
  -o-transition-property: opacity background;
  transition-property: opacity background;
}
.switch-label:before, .switch-label:after {
  position: absolute;
  top: 50%;
  margin-top: -.5em;
  line-height: 1;
  -webkit-transition: inherit;
  -moz-transition: inherit;
  -o-transition: inherit;
  transition: inherit;
}
.switch-label:before {
  content: attr(data-off);
  right: 11px;
  color: #aaa;
  text-shadow: 0 1px rgba(255, 255, 255, 0.5);
}
.switch-label:after {
  content: attr(data-on);
  left: 11px;
  color: white;
  text-shadow: 0 1px rgba(0, 0, 0, 0.2);
  opacity: 0;
}
.switch-input:checked ~ .switch-label {
  background: rgb( 4, 231, 98);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.15), inset 0 0 3px rgba(0, 0, 0, 0.2);
}
.switch-input:checked ~ .switch-label:before {
  opacity: 0;
}
.switch-input:checked ~ .switch-label:after {
  opacity: 1;
}

.switch-handle {
  position: absolute;
  top: 4px;
  left: 4px;
  width: 18px;
  height: 18px;
  background: white;
  border-radius: 10px;
  box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
  background-image: -webkit-linear-gradient(top, white 40%, #f0f0f0);
  background-image: -moz-linear-gradient(top, white 40%, #f0f0f0);
  background-image: -o-linear-gradient(top, white 40%, #f0f0f0);
  background-image: linear-gradient(to bottom, white 40%, #f0f0f0);
  -webkit-transition: left 0.15s ease-out;
  -moz-transition: left 0.15s ease-out;
  -o-transition: left 0.15s ease-out;
  transition: left 0.15s ease-out;
}
.switch-handle:before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -6px 0 0 -6px;
  width: 12px;
  height: 12px;
  background: #f9f9f9;
  border-radius: 6px;
  box-shadow: inset 0 1px rgba(0, 0, 0, 0.02);
  background-image: -webkit-linear-gradient(top, #eeeeee, white);
  background-image: -moz-linear-gradient(top, #eeeeee, white);
  background-image: -o-linear-gradient(top, #eeeeee, white);
  background-image: linear-gradient(to bottom, #eeeeee, white);
}
.switch-input:checked ~ .switch-handle {
  left: 34px;
  box-shadow: -1px 1px 5px rgba(0, 0, 0, 0.2);
}

.switch-green > .switch-input:checked ~ .switch-label {
  background: #4fb845;
}


</style>
</head>

<body>

    <div class="container-">
<div class="row">
<div id="loading">
<div class="loader">Loading...</div>
</div>
</div>



</div>

<body class="<?php if($admin["mode"]=="dark" ): echo "dark-mode" ; endif; ?>">

          <nav class="navbar" role="navigation">
            <div id="menuToggle">
              <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
<ul id="menu" class="nav page-navigation">
<li class="nav-item <?php if (route(1) == "index") : echo ' active' ; endif; ?>">
<a href="<?=site_url("admin")?>" class="nav-link"> <img width="30" height="30" src="https://i.postimg.cc/FRf0MTcB/dashboard.png" alt="">  Dashboard</a>
</li>
<li class="nav-item">
    <button class="dropdown-btn"><i class="fa fa-users" aria-hidden="true"></i>  Users 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
   <ul class="nav">
    <li class="nav-item <?php if (route(1) == "clients") : echo ' active' ; endif; ?>">
<a href="<?=site_url("admin/clients")?>" class="nav-link"><i class="fa fa-users" aria-hidden="true"></i>  Users</a></li>
<li class="nav-item <?php if (route(1) == "fund-add-history") : echo ' active' ; endif; ?>"><a class="nav-link" href="<?php echo site_url("admin/fund-add-history");?>"><i class="fas fa-money-bill-alt"></i> Fund Add History</a></li>
<li class="nav-item <?php if (route(1) == "special-pricing") : echo ' active' ; endif; ?>"><a class="nav-link" href="<?php echo site_url("admin/special-pricing");?>"><i class="fas fa-sack-dollar"></i> Special Pricing</a></li>
</li>
   </ul>
  </div>
</li>


<li class="nav-item">
    <button class="dropdown-btn"><i
class="glyphicon glyphicon-list"></i>  Services 

    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
   <ul class="nav">
    <li class="nav-item <?php if (route(1) == "services") : echo 'active' ; endif; ?>">
<a href="<?=site_url("admin/services")?>" class="nav-link"><i
class="glyphicon glyphicon-list"></i>  Services</a>
<li class="nav-item<?php if (route(1) == "update-prices") : echo ' active' ; endif; ?>"><a class="nav-link" href="<?php echo site_url("admin/update-prices");?>"><i class="fas fa-sack-dollar"></i> Update prices</a></li>
</li>
<li class="nav-item<?php if (route(1) == "bulk") : echo ' active' ; endif; ?>"><a
class="nav-link" href="<?php echo site_url("admin/bulk") ?>"><i
class="fa fa-list-ul"></i>  Bulk Services Editor</a></li>

<?php if ($admin["access"]["admin_access"] && $admin["access"]["bulk"]): ?>



<li class="nav-item<?php if (route(1) == "category-sort") : echo ' active' ; endif; ?>"><a

class="nav-link" href="<?php echo site_url("admin/category-sort") ?>"><i
class="fa fa-list-ul"></i>  Category Sort</a></li>
<?php endif; ?>



<?php if ($admin["access"]["admin_access"] && $admin["access"]["bulkc"]): ?>
<li class="nav-item<?php if (route(1) == "bulkc") : echo ' active' ; endif; ?>"><a
class="nav-link" href="<?php echo site_url("admin/bulkc") ?>"><i
class="fa fa-list-ol"></i>  Bulk Category Editor</a></li>
<?php endif; ?>


<?php if ($admin["access"]["admin_access"] && $admin["access"]["synced-logs"]): ?>
<li class="nav-item<?php if (route(1) == "synced_logs") : echo ' active' ;endif; ?>"><a
class="nav-link" href="<?php echo site_url("admin/synced_logs") ?>"><i
class="fa fa-refresh"></i>  Synced Logs</a></li>
<?php endif; ?>


   </ul>
  </div>
</li>

<li class="nav-item">

    <button class="dropdown-btn"><i class="fas fa-shopping-bag"></i> Orders 

    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
   <ul class="nav">
<?php if ($admin["access"]["admin_access"] && $admin["access"]["orders"]): ?>

<li class="nav-item<?php if (route(1) == "orders") : echo ' active' ; endif; ?>"><a

class="nav-link" href="<?php echo site_url("admin/orders") ?>"><i
class="fas fa-shopping-bag"></i>  Orders</a></li>
<?php endif; ?>

<?php if ($admin["access"]["admin_access"] && $admin["access"]["tasks"]): ?>
<li class="nav-item<?php if (route(1) == "tasks") : echo ' active' ; endif; ?>"><a class="nav-link" href="<?php echo site_url("admin/tasks") ?>"><i class="fas fa-tasks"></i>  Order Refill and Cancel Tasks</a></li>
<?php endif; ?>


<?php if ($admin["access"]["admin_access"] && $admin["access"]["dripfeed"]): ?>
<?php if(countRow(["table"=>"orders","where"=>["dripfeed"=>2]])>0){   ?>
<li class="nav-item<?php if (route(1) == " dripfeed") : echo ' active' ; endif; ?>"><a
class="nav-link" href="<?php echo site_url("admin/dripfeed") ?>"><i
class="fas fa-shopping-bag"></i>  Drip-feeds</a></li>
<?php

}else{

}
?>
<?php endif; ?>

<?php if(countRow(["table"=>"orders","where"=>["subscriptions_type"=>2]])>0){
?>
<li class="nav-item<?php if (route(1) == "subscriptions") : echo ' active' ; endif; ?>"><a
class="nav-link" href="<?php echo site_url("admin/subscriptions") ?>"><i class="fas fa-bag"></i>  Subscriptions</a></li>
<?php
 } else {

}
?>
       </ul>
       </div>
</li>

<?php if ($admin["access"]["admin_access"] && $admin["access"]["payments"]): ?>

<li class="nav-item<?php if (route(1) == "payments") : echo ' active' ; endif; ?>"><a class="nav-link" href="<?php echo site_url("admin/payments/online") ?>"><i
class="fas fa-money-bill-alt"></i>  Payments</a>
</li>
<?php endif; ?>


<?php if ($admin["access"]["admin_access"] && $admin["access"]["tickets"]): ?>

<li class="nav-item<?php if (route(1) == "tickets") : echo ' active' ; endif; ?>"><a class="nav-link" href="<?php echo site_url("admin/tickets") ?>"><i class="fas fa-headset"></i>  Tickets
<?php if(countRow(["table"=>"tickets","where"=>["client_new"=>2]])>0){
?><span class="badge" style="background-color:#cc9616 ">
<?=countRow(["table"=>"tickets","where"=>["client_new"=>2]]);?>
</span>
<?php
} else{
}
?></a>
</li>
<?php endif; ?>

<?php if ($admin["access"]["admin_access"] && $admin["access"]["additionals"]): ?>
<li class="nav-item">
  <button class="dropdown-btn"><i class="fa fa-question-circle"></i> Additionals 
<i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
   <ul class="nav">
<?php if ($admin["access"]["admin_access"] && $admin["access"]["referral"]): ?>

<li class="nav-item<?php if (route(1) == "payouts") : echo ' active' ; endif; ?>"><a

    class="nav-link" href="<?php echo site_url("admin/referrals") ?>"><i
class="fas fa-bezier-curve"></i>  Affiliates</a></li>
<?php endif; ?>



<?php if ($admin["access"]["admin_access"] && $admin["access"]["broadcast"]): ?>
<li class="nav-item<?php if (route(1) == "broadcasts") : echo ' active' ; endif; ?>"><a
    class="nav-link" href="<?php echo site_url("admin/broadcasts") ?>"><i
class="fas fa-bullhorn"></i>  Broadcasts</a>
</li>
<?php endif; ?>



<?php if ($admin["access"]["admin_access"] && $admin["access"]["logs"]): ?>
<li class="nav-item <?php if (route(1) == "logs") : echo ' active' ; endif; ?>"><a class="nav-link" href="<?php echo site_url("admin/logs") ?>"><i
class="fas fa-file-text"></i>  Logs</a>
</li>
<?php endif; ?>


<?php if ($admin["access"]["admin_access"] && $admin["access"]["reports"]): ?>
<li class="nav-item <?php if (route(1) == "reports") : echo ' active' ; endif; ?>"><a class="nav-link" href="<?php echo site_url("admin/reports") ?>"><i
class="fas fa-chart-line"></i>  Reports</a>
</li>
<?php endif; ?>

<?php if ($admin["access"]["admin_access"] && $admin["access"]["videop"]): ?>
<li class="nav-item<?php if (route(1) == "earn") : echo ' active' ; endif; ?>"><a class="nav-link"
    href="<?php echo site_url("admin/earn") ?>"><i class="fas fa-video"></i>  Promotion</a></li>
<?php endif; ?>


<?php if ($admin["access"]["admin_access"] && $admin["access"]["coupon"]): ?>
<li class="nav-item<?php if (route(1) == "kuponlar") : echo ' active' ; endif; ?>"><a
    class="nav-link" href="<?php echo site_url("admin/kuponlar") ?>"><i
class="fas fa-tags"></i>  Coupon Code</a></li>
<?php endif; ?>

<?php if ($admin["access"]["admin_access"] && $admin["access"]["child-panels"]): ?>
<li class="nav-item<?php if (route(1) == "child-panels") : echo ' active' ; endif; ?>"><a
    class="nav-link" href="<?php echo site_url("admin/child-panels") ?>"><i
class="fas fa-child"></i>  Child Panels</a></li>
<?php endif; ?>


<?php if ($admin["access"]["admin_access"] && $admin["access"]["updates"]): ?>
<li class="nav-item<?php if (route(1) == "updates") : echo ' active' ; endif; ?>"><a class="nav-link" href="<?php echo site_url("admin/updates") ?>"><i
class="fas fa-bell"></i> Updates</a></li>
<?php endif; ?>


<?php if ($admin["access"]["admin_access"] && $admin["access"]["news"]): ?>
<li class="nav-item<?php if( route(1) == "payments" && route(2)=="bank" ): echo ' active' ; endif;
?>"><a class="nav-link" href="<?php echo site_url("admin/payments/bank") ?>"><i class="fa fa-bank"></i>
    Payment Notificaions </a></li>
<?php endif; ?>

</ul></div>
<?php endif; ?>
</li>

<?php if ($admin["access"]["admin_access"] && $admin["access"]["appearance"]): ?>
<li class="nav-item<?php if (route(1) == "appearance") : echo ' active' ; endif; ?>"><a class="nav-link"
href="<?php echo site_url("admin/appearance") ?>"><i class="fas fa-sun"></i>
Appearance</a>
</li>
<?php endif; ?>
<?php if ($admin["access"]["admin_access"] && $admin["access"]["users"]): ?>

<li class="nav-item<?php if (route(1) == "settings") : echo ' active' ; endif; ?>"><a class="nav-link"

href="<?php echo site_url("admin/settings") ?>"><i
class="glyphicon glyphicon-cog"></i>  Settings</a>
</li>
<?php endif; ?>
<?php if ($admin["access"]["admin_access"] && $admin["access"]["manager"]): ?>

<li class="nav-item<?php if(route(1) == "manager") : echo " active" ; endif;?>"><a href="<?php echo site_url("admin/manager"); ?>" class="nav-link"><i


    class="fas fa-shield-alt"></i> Manager</a></li>
<?php endif; ?>

<li class="nav-item<?php if (route(1) == "account") : echo ' active' ; endif; ?>"><a class="nav-link"

href="<?php echo site_url("admin/account") ?>"><i class="fas fa-user"></i>  Account</a>
</li>
<li class="nav-item">
<a class="nav-link" href="admin/logout"><i class="fa fa-sign-out-alt"></i>  Logout</a>

</li>


</ul>
</div>
 <?php $brand_logo = json_decode($ADMIN_CONSTANTS["brand_logo"]); ?>

<img style="margin-bottom:-25px;margin-left:60px;" width="<?=$brand_logo->width?>" height="<?=$brand_logo->height?>" src="<?=$brand_logo->logo_url?>">

<div class="header-right">

    <label id="switch" class="switch">
            <input type="checkbox" id="slider" <?php if($admin["mode"]=="sun"){echo "checked=\"checked\"";}?>>
            <span class="slider round"></span>
        </label>
<div class="manager">
<a href="<?php echo site_url("admin/manager");?>"> <img width="35" height="35" src="https://i.postimg.cc/mr2DxCvs/admin.png" alt=""></a></div>
</div>
</nav><br><br>
<br>