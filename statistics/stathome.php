<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.wrapper{
  height: 100%;
  width: 300px;
  position: relative;
}
.wrapper .menu-btn{
  position: absolute;
  left: 20px;
  top: 10px;
  background: #4a4a4a;
  color: #fff;
  height: 45px;
  width: 45px;
  z-index: 9999;
  border: 1px solid #333;
  border-radius: 5px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
}
#btn:checked ~ .menu-btn{
  left: 247px;
}
.wrapper .menu-btn i{
  position: absolute;
  transform: ;
  font-size: 23px;
  transition: all 0.3s ease;
}
.wrapper .menu-btn i.fa-times{
  opacity: 0;
}
#btn:checked ~ .menu-btn i.fa-times{
  opacity: 1;
  transform: rotate(-180deg);
}
#btn:checked ~ .menu-btn i.fa-bars{
  opacity: 0;
  transform: rotate(180deg);
}
#sidebar{
  position: fixed;
  background: #404040;
  height: 100%;
  width: 270px;
  overflow: hidden;
  left: -270px;
  transition: all 0.3s ease;
}
#btn:checked ~ #sidebar{
  left: 0;
}
#sidebar .title{
  line-height: 65px;
  text-align: center;
  background: #808080;
  font-size: 25px;
  font-weight: 600;
  color: #f2f2f2;
  border-bottom: 1px solid #222;
}
#sidebar .list-items{
  position: relative;
  background: #131E3A;
  width: 100%;
  height: 100%;
  list-style: none;
}
#sidebar .list-items li{
  padding-left: 40px;
  line-height: 50px;
  border-top: 1px solid rgba(255,255,255,0.1);
  border-bottom: 1px solid #333;
  transition: all 0.3s ease;
}
#sidebar .list-items li:hover{
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  box-shadow: 0 0px 10px 3px #222;
}
#sidebar .list-items li:first-child{
  border-top: none;
}
#sidebar .list-items li a{
  color: #f2f2f2;
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
  height: 100%;
  width: 100%;
  display: block;
}
#sidebar .list-items li a i{
  margin-right: 20px;
}
#sidebar .list-items .icons{
  width: 100%;
  height: 40px;
  text-align: center;
  position: absolute;
  bottom: 100px;
  line-height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
}
#sidebar .list-items .icons a{
  height: 100%;
  width: 40px;
  display: block;
  margin: 0 5px;
  font-size: 18px;
  color: #f2f2f2;
  background: #4a4a4a;
  border-radius: 5px;
  border: 1px solid #383838;
  transition: all 0.3s ease;
}
#sidebar .list-items .icons a:hover{
  background: #404040;
}
.list-items .icons a:first-child{
  margin-left: 0px;
}
.content{
  position: absolute;
  top: 25%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: #202020;
  z-index: -1;
  width: 100%;
  text-align: center;
}
.content .header {
  font-size: 20px; /* increased font size */
  font-weight: bold; /* changed font weight to bold */
  margin-top:-110px; /* added margin to move header up */
  text-transform: uppercase; /* converted text to uppercase */
  letter-spacing: 0.5px; /* added letter spacing for better readability */
  color: #131E3A;
  text-align: center;
}

.content p{
  font-size: 40px;
  font-weight: 700;
}
body {
        background-image: url("https://c8.alamy.com/comp/2DB31XG/coronavirus-covid19-world-statistics-analysis-vector-illustration-cartoon-analyst-people-report-corona-virus-disease-situation-graph-chart-update-worldwide-medicine-breaking-news-concept-background-2DB31XG.jpg");
        background-size: 100%;
        background-repeat: no-repeat;
        background-position: right top;
    }
 </style>
   </head>
   <body>
      <div class="wrapper">
         <input type="checkbox" id="btn" hidden>
         <label for="btn" class="menu-btn">
         <i class="fas fa-bars"></i>
         <i class="fas fa-times"></i>
         </label>
         <nav id="sidebar">
            <div class="title">
            
            <i class="fas fa-collar" style="color: white;"></i> &nbsp; Hi User
            </div>
            <ul class="list-items">
               <li><a href="page.php"><i class="fas fa-chart-bar"></i>Branchwise stats</a></li>
               <li><a href="page3.php"><i class="fas fa-chart-line"></i>Sectorwise stats</a></li>
               <li><a href="page2.php"><i class="fas fa-chart-area"></i>Yearwise stats</a></li>
               <li><a href="page4.php"><i class="fas fa-chart-pie"></i>General Trends</a></li>
               <li><a href="/TPC/welcome.php"><i class="fas fa-arrow-left"></i>Back</a></li>  

            </ul>
         </nav>
      </div>
      <div class="content">
         <div class="header">
         
         <h1 class="heading">View Statistcs</h1>

      </div>
   </body>
</html>




