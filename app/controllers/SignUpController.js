app.controller('SignUpController', function(dataFactory,$scope,$http){
  $scope.showModal = true;
});

app.directive('signUp', function () {
    return {
      template: '<div class="modal fade">' + 
          '<div class="modal-dialog ">' +  
            '<div class="modal-body" ng-transclude></div>' +  
          '</div>' + 
        '</div>',
      restrict: 'E',
      transclude: true,
      replace:true,
      scope:true,
      link: function postLink(scope, element, attrs) {'<div class="modal fade">' + 
          '<div class="modal-dialog ">' +  
            '<div class="modal-body" ng-transclude></div>' +  
          '</div>' + 
        '</div>',
        scope.title = attrs.title;

        scope.$watch(attrs.visible, function(value){
          if(value == true)
            $(element).signUp('show');
          else
            $(element).signUp('hide');
        });

        $(element).on('shown.bs.modal', function(){
          scope.$apply(function(){
            scope.$parent[attrs.visible] = true;
          });
        });

        $(element).on('hidden.bs.modal', function(){
          scope.$apply(function(){
            scope.$parent[attrs.visible] = false;
          });
        });
      }
    };
  });