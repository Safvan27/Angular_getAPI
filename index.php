<!DOCTYPE html>
	<html lang="en-US">
	<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"  >
    <title>website</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
    <script src="app/route.js"></script>
    <script src="app/controllers/newController.js"></script>
	</head>

	

    <body ng-app="sample">
        <div ng-controller="myController">
        <center>
            <br/><br/>

            <h1><strong><u>WELCOME TO WEBSITE</u></strong></h1>
            

<a href="#">HOME</a>
<a href="#!menu1">MENU1</a>

<div class="ng-view"></div><br>
</center>
</div>
    </body>
 </html>
