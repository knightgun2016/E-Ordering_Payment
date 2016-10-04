var app =  angular.module('main-App',['ngAnimate','ngSanitize','ngRoute','angularUtils.directives.dirPagination',
                                        'ui.bootstrap']);

app.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
            when('/', {
                templateUrl: 'templates/home.html',
                controller: 'AdminController'
            }).
            when('/products', {
                templateUrl: 'templates/products.html',
                controller: 'ProductController'
            })
            .when('/signIn', {
                templateUrl: 'templates/account.html',
                controller: 'AccountController'
            })
            .when('/register',{
                templateUrl: 'templates/register.html',
                controller: 'RegisterController'
            })
            .when('/contact',{
                templateUrl: 'templates/drop-down.html',
                controller: 'ContactController'
            })
            .when('/items',{
                templateUrl:'templates/items.html',
                controller: 'ItemController'
            })
            .when('/signUp',{
                templateUrl:'templates/sign-up.html',
                controller:'SignUpController'
            })
            .otherwise({redirectTo:'/'});
}]);