var app =  angular.module('main-App',['ngRoute','angularUtils.directives.dirPagination']);

app.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
            when('/', {
                templateUrl: 'templates/home.html',
                controller: 'HomeController'
            }).
            when('/login', {
                templateUrl: 'templates/login.html',
                controller: 'LoginController'
            })
            .when('/register', {
                controller: 'RegisterController',
                templateUrl: 'templates/register.html'
                
            })
            .otherwise({redirectTo:'/'});
}]);