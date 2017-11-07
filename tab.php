<!DOCTYPE HTML>
<html>
	<head>
		<title>Test Solution</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="main.css" />
		<link type="text/css" media="all" rel="stylesheet" href="style.css">
	</head>
<style>
ul {
    list-style: none;
    padding: 0;
    margin: 0;
}
li {
    float: left;
    border: 1px solid #000;
    border-bottom-width: 0;
    margin: 3px 3px 0px 3px;
    padding: 5px 5px 0px 5px;
    background-color: #CCC;
    color: #696969;
}
#mainView {
    border: 1px solid black;
	clear: both;
	padding: 0 1em;
}
.active {
    background-color: #FFF;
    color: #000;
}
</style>
      <script src = "angular.min.js"></script>
      <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.3.3/angular.min.js"></script>
<script>
angular.module('TabsApp', [])
.controller('TabsCtrl', ['$scope', function ($scope) {
    $scope.tabs = [{
            title: 'Price Overview',
            url: 'one.tpl.html'
        }, {
            title: 'Fund Information',
            url: 'two.tpl.html'
        }, {
            title: 'Performance',
            url: 'three.tpl.html'
    }, {
            title: 'Rating',
            url: 'four.tpl.html'
    }, {
            title: 'Documents',
            url: 'five.tpl.html'
    }];

    $scope.currentTab = 'one.tpl.html';

    $scope.onClickTab = function (tab) {
        $scope.currentTab = tab.url;
    }
    
    $scope.isActiveTab = function(tabUrl) {
        return tabUrl == $scope.currentTab;
    }
}]);

</script>
	<body class="subpage">
		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.php" class="logo">User</a>
					<nav id="nav">
						<a href="index.php">JSON Table</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>
		<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner">
					<div ng-app="TabsApp">
    <div id="tabs" ng-controller="TabsCtrl">
        <ul>
            <li ng-repeat="tab in tabs" 
                ng-class="{active:isActiveTab(tab.url)}" 
                ng-click="onClickTab(tab)">{{tab.title}}</li>
        </ul>
        <div id="mainView">
            <div ng-include="currentTab"></div>
        </div>
    </div>
    <script type="text/ng-template" id="one.tpl.html">
		<div id="viewOne">
			<img src="test.jpg">
		</div>
	</script>
	
	<script type="text/ng-template" id="two.tpl.html">
		<div id="viewTwo">
			<h1>Fund Information</h1>			
		</div>
	</script>
	
	<script type="text/ng-template" id="three.tpl.html">
		<div id="viewThree">
			<h1>Performance</h1>
		</div>
	</script>
	<script type="text/ng-template" id="four.tpl.html">
		<div id="viewFour">
			<h1>Rating</h1>
		</div>
	</script>
<script type="text/ng-template" id="five.tpl.html">
<div id="viewFive">
			<h1>Documents</h1>
		</div>
	</script>
</div>

				</div>
			</section>
		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					
				</div>
			</footer>
	</body>
</html>
