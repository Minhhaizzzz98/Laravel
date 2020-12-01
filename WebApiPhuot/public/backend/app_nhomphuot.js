console.log('start nhóm phượt');
var app = angular.module("app", [], function($interpolateProvider) {
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});



app.controller('AppController', function($scope, $http){
    $http.get('http://phuot-app-test1.byethost16.com/public/api/NhomPhuot').then(function(res){
        console.log(res);
        $scope.nhomphuots = res.data.data;
    });


    $scope.add_nhom = function() {
        console.log($scope.nhom);
    }
});