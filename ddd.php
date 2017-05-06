<!DOCTYPE html>
<html>
<title>dashboard</title>
<style>
/* Style The Dropdown Button */
.dropbtn {
    background-color: #75c519;
    color: white;
    font-size: 16px;
    border: none;
    cursor: pointer;
    padding: 10px 37px 10px 28px;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
        position: relative;
    display: inline-block;
    top: 25px;
    right: -13%;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
        padding: 5px 10px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */


/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */

.leftsidebar{
    background: #075ea5;
    width: 220px;
    height: 600px;
    color: #fff;
		}
.rightsidebar{
    width: 1105px;
    height: 600px;
    color: #000;
    position: relative;
    top: -600px;
    right: -17%;
		}		

a{
	color:#fff;
	}
.leftsidebar{
    background: #075ea5;
    width: 220px;
    height: 600px;
    color: #fff;
		}
.rightsidebar{
    width: 1105px;
    height: 600px;
    color: #000;
    position: relative;
    top: -600px;
    right: -17%;
		}		
.bt1{
	 background: red;
    font-size: 31px;
    color: #fff;
    width: 11%;
    padding: 20px 31px 18px 70px;
    border-radius: 6px;
    position: relative;
    right: -17%;

	
	}
.bt2{
	 background: blue;
    font-size: 31px;
    color: #fff;
    width: 11%;
    padding: 20px 31px 18px 70px;
    border-radius: 6px;
    position: relative;
    right: -56%;
    top: -104px;
    
	
	}
.bt3 {
    background: red;
    font-size: 31px;
    color: #fff;
    width: 11%;
    padding: 20px 69px 18px 26px;
    border-radius: 6px;
    position: relative;
    right: -17%;
}
.bt4 {
    background: blue;
    font-size: 31px;
    color: #fff;
    width: 11%;
        padding: 20px 97px 18px 20px;
    border-radius: 6px;
    position: relative;
    right: -56%;top: -104px;
}


a{
	color:#fff;    text-decoration: none;
	}		
</style>
<head>
</head>
<body>
<div style="background: #043c69;padding: 22px 10px 20px 12px;">
            <p> <a href="index.html" style="color: #fff;float: right;position: relative;top: -23px;right: 2%;">Logout</a> </p>

 </div>
<div>
    <div class="leftsidebar">
        <div class="dropdown">
          <button class="dropbtn">Dashboard</button>
          <!--<div class="dropdown-content">
            <a href="#">ADD</a>
            <a href="#">NEW</a>
           </div>-->
        </div>   
        <!--<br><br>
        <div class="dropdown">
          <button class="dropbtn">Dashboard 1</button>
          <div class="dropdown-content">
            <a href="#">ADD</a>
            <a href="#">NEW</a>
           </div>
        </div>  
        <br><br>
        <div class="dropdown">
          <button class="dropbtn">Dashboard 2</button>
          <div class="dropdown-content">
            <a href="#">ADD</a>
            <a href="#">NEW</a>
           </div>
        </div>   -->
    </div>
    <div class="rightsidebar">
               <div style="padding:0 0 0 0;"> 
                        <p class="bt1"><a href="add.html">ADD</a></p> <p class="bt2"><a href="view.html">VIEW</a></p>

                          <p class="bt3"><a href="complete.html">COMPLETE</a></p> <p class="bt4"><a href="incomplete.html">INCOMPLETE</a></p>
                </div> 
    </div>

</div>


</body>
</html>
