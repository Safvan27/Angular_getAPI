var app = angular.module("sample", ["ngRoute"]);
app.config(['$routeProvider',function($routeProvider){

    $routeProvider
    .when("/menu1", {
        templateUrl : "templates/menu1.html" ,
        controller : "newController"
        
    });

}]);
function getResultsPage(){
    $http({
        url: URL + 'api/getData.php',
        method: 'GET'
     }).then(function(res){
        $scope.data = res.data.data;
     });

    }
