@import url('https://fonts.googleapis.com/css2?family=Overpass:wght@100;200;300;400;600;700;800;900&display=swap');
* {
	font-family: 'Overpass', sans-serif;
}
body, .row, ul, ol, p {
	list-style: none;
	text-decoration: none !important;
	margin: 0px;
	padding: 0px;
	font-family: 'Overpass', sans-serif;
}
img {
	display: block;
	max-width: 100%;
}
a:hover {
	text-decoration: none;
}
*:focus {
	outline: none !important
}
.innerHeader {border-bottom: 1px solid rgb(112 112 112 / 20%);}

.menuContainerMain ul {
    display: flex;
    align-items: center;
    margin-left: auto;
    margin-right: 0px;
    max-width: max-content;
}

.menuContainerMain a {
    padding: 20px 10px;
    display: block;
    color: #000;
}

.innerHeader .row {
    align-items: center;
}

.menuContainerMain {
    /* max-width: max-content; */
}

.container {width: 100%;max-width: 1440px;}
.sectionAbout {
    background-size: contain;
    min-height: 600px;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
}

.sectionAbout .row {
    height: 100%;
    /* background: red; */
    min-height: 600px;
}

.rightAboutSU {
    margin-top: auto;
    height: max-content;
    max-height: max-content;
    display: block;
    /* display: flex; */
    max-width: 450px;
    margin-left: auto;
    margin-top: auto;
}

.buttonBlack {
    background: #000;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    max-width: max-content;
    padding: 11px 44px;
    margin: 30px 0px 0px;
    border: 2px solid #000;
    transition: 0.5s all;
    font-weight: 600;
    font-size: 15px;
}

.buttonBlack:hover {
    background: none;
    color: #000;
}

.subHeading {
    font-size: 24px;
    color: #000;
    opacity: 0.5;
    font-weight: 500;
}
.heading {
    font-weight: 600;
    font-size: 67px;
    position: relative;
}

.displayFlex {
    display: flex;
    flex-wrap: wrap;
}

.justifyB {
    justify-content: space-between;
}

.maxW {
    max-width: max-content;
}

.leftAbout li a {
    display: block;
    margin-right: 20px;
    color: #000;
    font-size: 20px;
    opacity: 0.5;
}

.leftAbout ul {
    margin: 20px 0px 0px;
}

.leftAbout li a:hover {
    opacity: 1;
}

.sectionAbout .col-md-6:last-child {
    display: flex;
}

.rightAboutSU p {
    color: #707070;
    font-weight: 300;
}
.productsContainer {
    width: 90%;
    margin-left: auto;
    /* max-width: 16640px; */
    margin: auto;
    margin: 100px 0 60px auto;
}

.headerProductSlider {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 30px;
}

.headerProductSlider h2 {
    font-size: 27px;
    font-weight: 600;
}

.headerProductSlider a {
    color: #000;
    opacity: 0.6;
    font-size: 15px;
    font-weight: 400;
    text-decoration: underline;
}

.headerProductSlider a:hover {
    opacity: 1;
}
.padding0 {
    padding: 0px;
}

.contentFirst {
    background: #FFDDC4;
    display: flex;
    align-items: flex-end;
    padding: 50px;
}

.contentContainerFUllHOmepage h2 {
    font-size: 64px;
    max-width: 200px;
    font-weight: 600;
}

.contentContainerFUllHOmepage p {
    font-size: 14px;
    line-height: 19px;
    font-weight: 300;
    color: #707070;
    margin: 20px 0px 40px;
}

.contentSecond {
    background: #F2F2F2;
    padding: 50px;
}

.testimonials {
    margin: 100px 0px;
}

.minCOntainer {max-width: 1200px;margin: auto;padding: 40px;}

.slidertestimonials {
    background: #F2F2F2;
    padding: 90px;
    margin-left: 93px;
    z-index: -1;
    position: relative;
}

.innerSlidertestimonials {
    padding-top: 100px;
}

.innerSlidertestimonials p {
    color: #000000;
    font-size: 20px;
    font-weight: 100;
    line-height: 31px;
    margin-bottom: 30px;
}

.innerSlidertestimonials h6 {
    font-weight: 600;
    font-size: 24px;
    position: relative;
    padding-left: 29px;
}

.innerSlidertestimonials h6:after {
	content: "";
	display: block;
	width: 15px;
	height: 2px;
	background: black;
	position: absolute;
	left: 0;
	top: 0;
	bottom: 0;
	margin: auto;
}

.minCOntainer h2 {
    font-size: 74px;
    font-weight: 700;
    margin: 30px 0px;
    color: #000;
    position: relative;
    z-index: 2;
    overflow: visible;
    width: fit-content;
}

.testimonials .col-md-3 {
    margin-right: 0px;
    z-index: 2;
    position: relative;
    overflow: visible;
}
.minCOntainer h2:after {
	content: "";
	display: block;
	width: 100%;
	background: #707070;
	height: 1px;
	position: absolute;
	bottom: -20px;
	z-index: 2;
	right: -50%;
	max-width: 100%;
}


.absContent {
    position: absolute;
    bottom: 0px;
    padding: 40px;
}

.innerCOntainerSection {
}

.absContent h4 {
    font-size: 19px;
    font-weight: 200;
    color: #000000;
    opacity: 0.5;
}

.absContent h2 {
    font-weight: 800;
    font-size: 33px;
}

.newsSection h4 {
    text-align: center;
    font-size: 19px;
    font-weight: 200;
    color: #000000;
    opacity: 0.5;
}

.newsSection {
    margin: 100px 0px;
}

.newsSection h2 {
    font-size: 42px;
    font-weight: 800;
    text-align: center;
    margin: 13px 0px 50px;
}

.containerBlogContent h3 {
    font-size: 20px;
    font-weight: 600;
    color: #000;
}

.containerBlogContent {
    padding: 13px 0px 0px;
}

.postedDate {
    font-size: 15px;
    color: #000000;
    opacity: 0.5;
    margin: 15px 0px 20px;
    display: block;
}

.containerBlogContent p {
    font-size: 15px;
    line-height: 24px;
    font-weight: 400;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2; /* number of lines to show */
    -webkit-box-orient: vertical;
    margin-bottom: 30px;
}

.blackreverse {
    display: flex;
    align-items: center;
    justify-content: center;
    border: 2px solid #000000;
    color: #000000;
    max-width: max-content;
    padding: 10px 35px;
    font-size: 14px;
    margin: 20px 0px 0px;
    transition: 0.5s all;
}

.blackreverse:hover {
    color: #fff;
    background: #000;
}
.leftAbout h2::after {
	content: "";
	display: block;
	width: 100%;
	background: #7070707d;
	height: 1px;
	max-width: 280px;
	margin-left: auto;
	margin-right: -120px;
	bottom: -35px;
	top: auto;
	position: absolute;
	right: -30px;
}

.leftAbout h2 {
    max-width: max-content;
}
img.section2Images {
    position: absolute;
    left: 30%;
    height: 100%;
}
.newsLetterCOntainer {
    display: block;
    width: 100%;
    height: 100%;
    background: #FFDDC4;
    padding: 40px;
    min-height: 370px;
}

.newsLetterCOntainer h2 {
    font-weight: 800;
    font-size: 24px;
}

.newsLetterCOntainer p {
    line-height: 22px;
    font-size: 16px;
    opacity: 0.6;
}

.inputNewsLetter input, .inputNewsLetter button {
    background: none;
    border: none;
}

.inputNewsLetter {
    border-bottom: 1px solid #707070;
    background-size: 20px 20px;
    background-repeat: no-repeat;
    padding-left: 30px;
    margin: 20px 0px 0px;
    padding-bottom: 12px;
    background-position: left top;
    display: flex;
    justify-content: space-between;
}

.menuCOntainers {
    max-width: 33%;
    /* float: left; */
}

.menuCOntainers h6 {
    font-weight: 800;
    font-size: 21px;
    margin-bottom: 30px;
    color: #000;
}

footer .col-md-8 {
    display: flex;
    justify-content: space-between;
    padding-left: 10%;
    padding-right: 9%;
    padding-top: 3%;
}

.menuCOntainers a {
    display: block;
    margin-bottom: 10px;
    color: #000;
    opacity: 0.4;
    font-weight: 300;
}

ul.socialMedia {
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: max-content;
}

ul.socialMedia a {
    display: block;
    margin-right: 19px;
}

.menuCOntainers a:hover {
    opacity: 1;
}
footer {
    border-top: 1px solid #70707057;
}