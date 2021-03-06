(function() {
    kacologoApp = angular.module('kacologo-login', []);
    
    /**************************** Login Page Controller ****************************/
    kacologoApp.controller('LoginCtrl', ['$scope', '$http', '$log', function($scope, $http, $log) {
        $scope.username = "";
        $scope.password = "";
        
        $scope.login = function() {
            var data = "username=" + $scope.username + "&password=" + $scope.password;
            
            $http({
                method: 'POST',
                url: '/php-project/templates/login.php',
                data: data,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function (data, status, headers, config)
                {
                    data = data.replace('\r', '').replace('\n', '').trim();
                
                    if (data == 'SUCCESS') {
                        window.location = 'http://php-gshawm.rhcloud.com/php-project/php_index.php';
                    } else {
                        $scope["submissionResult"] = data;
                    }
                })
                .error(function (data, status, headers, config)
                {
                    $scope["submissionResult"] = "Server Error!";
                });
            
            $scope.username = "";
            $scope.password = "";
        };
    }]);
    
    kacologoApp.directive('loginContent', function() {
        return {
            restrict: 'E',
            replace: true,
            templateUrl: 'templates/loginContent.php'
        };
    });
})();