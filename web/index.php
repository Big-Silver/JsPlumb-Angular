<html>
<head>
<meta charset="UTF-8">
<script type="text/javascript" src="js/jquery-1.9.0-min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2-min.js"></script>
<script type="text/javascript" src="js/jquery.jsPlumb-1.4.1-all-min.js"></script>
<!-- We get now a recent version of angularjs from a CDN -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.20/angular.js"></script>
<script type="text/javascript" src="js/example.js"></script>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/common.css">

<title>Getting started with jsPlumb</title>
</head>

<body ng-app="plumbApp">
<div ng-controller="PlumbCtrl" class="container">	
	<h1 ng-style="{'background-color': '#eee', 'width': '1140px'}">Angular v1 & jsPlumb</h1>
	<div id="container1" class="drop-container" ng-click="addEvent($event)" droppable>
		<div id="menu-container">
			<ul ng-style="{'list-style-type': 'none'}">
				<li ng-repeat="module in library" ng-style="{'height': '40px', 'margin-top': '15px'}">
					<div plumb-menu-item class="menu-item"	data-identifier="{{module.library_id}}" draggable>
						<div class="summary">{{module.title}}</div>
					</div>
				</li>
			</ul>			
		</div>

		<div plumb-item class="item" ng-repeat="module in schema" ng-style="{ 'left':module.x, 'top':module.y }"
			data-identifier="{{module.schema_id}}">
			<div class="title">{{module.title}}</div>
			{{module.description}}
			<div plumb-connect class="connect"></div>
		</div>
	</div>
	<p ng-style="{'margin': '10px'}">
		<button type="button" class="btn btn-primary" ng-click="redraw()">Clear</button>
	</p>

	<!--  does not render what comes behind it, so it's probably wrong -->
	<div post-render></div>

	<span ng-init="init()"></span>
</div>
</body>


</html>
