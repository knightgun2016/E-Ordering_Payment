
var App = angular.module('drag-and-drop', ['ngDragDrop']);

App.controller('TshirtController', function($scope, showImage ,$http) {
  showImage.get().then(function(image){
    $scope.selectedView = image.data;
  })
  $http.get('t-shirt.json').then(function(res){
    $scope.shirt = res.data;                
  });

});

App.factory ('showImage', function($http){
  return {
    get: function(){
        return $http.get('t-shirt.json');
    }
  };
});