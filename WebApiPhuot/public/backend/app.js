console.log('start');
var app = angular.module("app", [], function($interpolateProvider) {
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});



app.controller('AppController', function($scope, $http){
    $http.get('http://localhost/Laravel/WebApiPhuot/public/api/NhomPhuot').then(function(res){
        console.log(res);
        $scope.nhomphuots = res.data.data;   
        console.log(res.data.data);   
    });


    $scope.add_nhom = function() {
        console.log($scope.nhom);
    }
});