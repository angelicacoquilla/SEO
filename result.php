<?php
$search="Search";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$search = $_POST['ss'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pano Estamos</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Styles/header-style.css">
	<link rel="stylesheet" type="text/css" href="Styles/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Styles/font-awesome.min.css">
    <link rel="stylesheet" href="Styles/style.css" type="text/css">
</head>

<header>
	<nav id="header" class="navbar navbar-fixed-top">
		<div class="container">
		   	<ul class="nav nav-header navbar-nav navbar-left masthead-nav" font-size: 20px;">
		        <li><a href="index.html" style="color: rgb(218,165,32);">Home</a></li>
		        <li><a href="index.html#pic2" style="color: rgb(218,165,32);">About Us</a></li>
	            <li><a href="index.html#pic3" style="color: rgb(218,165,32);">Contact Us</a></li>
	        </ul>
		</div>
	</nav>
</header>
<body>
	<div class="search">
		<br><br><br>
		<form action="result.php" method="POST" id="form1">
			<input type="text" name="fname" style="width: 40%; height: 50px; border-radius: 7px" id="myInput" onkeyup="myFunction()" placeholder=<?php echo $search;?>>
			<br><br>
			<input type="hidden" name="ss" value="">
			<a href="result.php"><button class="button" type="submit" value="submit" form="form1" style="vertical-align: middle"> <span>SEARCH</span> </button></a>
		</form>
	</div>
	<ul id="myUL">
		<li><a href="mcdo.html"><div class=res>
			<p hidden>pangit ka Search</p><!--Keywords-->
			<img src="Images/MCDO.JPG" width="35%" height="45%;">
			<h3>McDonalds</h3>
			<h5>J.P. Laurel Ave, Poblacion District, Davao City, Davao del Sur</h5>
			<p>McDonald’s is one of the biggest fast food chains in the Philippines with hundreds of branches in the country. It serves products like the Big Mac, Cheeseburger, World Famous French Fries, Egg Muffin, Apple Pie, Sundae and the Happy Meal, plus local favorites like Chicken McDo, Burger McDo and McSpaghetti. Aside from serving regular walk-in customers, McDonalds also offers McDelivery and hosts party celebrations like birthdays. </p>
		</div></a></li>
		<li><a href="jobe.html"><div class=res>
			<p hidden>pangit ka Search</p><!--Keywords-->
			<img src="Images/jobee.jpg" width="35%" height="45%;">
			<h3>Jollibee</h3>
			<h5>Bolton Street, Corner Rizal Street, Poblacion District, Davao City, 8000 Davao del Sur</h5>
			<p>Jollibee is considered to be the largest fast food chain in the Philippines with more or less 750 braches throughout the country. A dominant market leader in the Philippines, Jollibee enjoys the lion’s share of the local market that is more than all the other multinational brands combined.The company has also expanded its operations abroad with a total of 80 branches, which include stores in the US of A, Vietnam, Hong Kong, Saudi Arabia, Qatar, and Brunei.</p>
		</div></a></li>
		<li><a href="Chowking.html"><div class=res>
			<p hidden>pangit ka Search</p><!--Keywords-->
			<img src="Images/cking.jpg" width="35%" height="45%;">
			<h3>Chowking</h3>
			<h5>Bolton Street, Corner Rizal Street, Poblacion District, Davao City, 8000 Davao del Sur</h5>
			<p>Chowking is the biggest and best tasting Chinese fast food chain in the Philippines. The number one pioneer in Asian quick-service restaurants. Chowking predominantly sells noodle soups, dim sum and rice bowls with toppings. Chowking set up its first store in 1985 under the company of Robert Kuan at a time when American-style burger joints were dominating the Philippine fast food scene.</p>
		</div></a></li>
		<li><a href="bking.html"><div class=res>
			<p hidden>pangit ka Search</p><!--Keywords-->
			<img src="Images/bking.jpg" width="35%" height="45%;">
			<h3>Burger King</h3>
			<h5>9 Orchid Road, Buhangin, Davao City, 8000 Davao del Sur</h5>
			<p>Burger King is the second largest fast food hamburger chain in the world. Our commitment to premium ingredients, signature recipes, and family-friendly dining experiences is what has defined our brand for more than 50 successful years.</p>
		</div></a></li>
		<li><a href="blugre.html"><div class=res>
			<p hidden>pangit ka Search</p><!--Keywords-->
			<img src="Images/blugre.jpg" width="35%" height="45%;">
			<h3>Blugré Coffee</h3>
			<h5>9SM Lanang Premier Skygarden, J. P. Laurel Ave, Davao City, Mindanao, Philippines</h5>
			<p>Blugré Coffee offers this delicious drinks, cakes and pastries that Durian is one of main component. The Durian Coffeccino is one of the flagship product of Blugré in which the perfect blend of the Durian and Coffee is being fused. We also have the Dutertea. One can enjoy the blend of the Durian, coffee, milk and green tea. Green tea is very rich in anti-oxidants paired with the nutritious Durian makes this a perfect combination.</p>
		</div></a></li>
		<li><a href="Cafe.html"><div class=res>
			<p hidden>pangit ka Search</p><!--Keywords-->
			<img src="Images/tavera.jpg" width="35%" height="45%;">
			<h3>Café Tavera</h3>
			<h5>Avanceña Street, Corner J. Camus Extension, Barangay 9-A, Davao City, 8000 Davao del Sur</h5>
			<p>If there’s one restaurant you should visit that will introduce you to the rich Davao cuisine, head to Café Tavera. Having been one of the most sought-after restaurants of many high-profile personalities in the country who visit Davao, Café Tavera offers much more than great food but also, it offers a dining experience like no other. </p>
		</div></a></li>
	</ul>

	<div class="top">
		<button onclick="topFunction()" id="myBtn" title="Go to top">Back to Top</button>
		<script>
			window.onscroll = function() {scrollFunction()};
			function scrollFunction() {
			    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			        document.getElementById("myBtn").style.display = "block";
			    } else {
			        document.getElementById("myBtn").style.display = "none";
			    }
			}
			function topFunction() {
			    document.body.scrollTop = 0;
			    document.documentElement.scrollTop = 0;
			}
		</script>
		<style>
			#myBtn {
			  display: none;
			  position: fixed;
			  bottom: 10px;
			  right: 20px;
			  font-size: 12px;
			  border: none;
			  outline: none;
			  background-color: grey;
			  color: white;
			  cursor: pointer;
			  padding: 1%;
			  border-radius: 5%;
			}
			#myBtn:hover {
			  background-color: #555;
			}
		</style>
	</div>
	
	<div class="row">
	  	<div class="column" style="background-color:rgba(0, 0, 0, 0.5);">
	    	<h2>Top</h2>
	    	<hr><br>
	    	<p>About Us</p>
	    	<p>Contact Us</p>
	    	<p>Developers</p>
	  	</div>
	 	<div class="column" style="background-color:rgba(0, 0, 0, 0.5)">
	    	<h2>Categories</h2>
	    	<hr><br>
	    	<p>Cafe and Pastries</p>
	    	<p>Fast Food Chains</p>
	    	<p>Restaurant</p>
	  	</div>
	  	<div class="column" style="background-color:rgba(0, 0, 0, 0.5);">
	    	<h2>Products</h2>
	    	<hr><br>
	    	<p>Appetizer</p>
	    	<p>Dessert</p>
	    	<p>Viand</p>
	  	</div>
	</div>
	<div style="color: rgb(248,248,248); font-size: 13px; text-align: center;">
		<br>
		<p>By continuing past this page, you agree to our Terms of Service, Cookie Policy, Privacy Policy and Content Policies. All rights reserved.</p>
		<br>
	</div>
	
</body>
<script>
function myFunction() {
    var input, filter, ul, li, a, i, count =0;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
            count++;
        }else {
            li[i].style.display = "none";
        }
    }
    if (count==0) {
    	alert("No Results Found");
    }
}
</script>
</html>