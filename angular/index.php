<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body>

<div ng-app="myApp" ng-controller="myCtrl">

    <ul>
        <li ng-show="myfun(1)">{{myfun(1)}}</li>
        <li ng-show="myfun(4)">{{myfun(4)}}</li>
        <li ng-show="myfun(2)">{{myfun(2)}}</li>
        <li ng-show="myfun(3)">{{myfun(3)}}</li>
        <li ng-show="myfun(5)">{{myfun(5)}}</li>
    </ul>
</div>

<script>
    var app = angular.module("myApp", []);
    app.controller("myCtrl", function($scope,$filter) {

        //$scope.test=[{id:1,name:"haha"},{id:2,name:"hihi"},{id:3,name:"hihi"}].some(ele=>ele.id===0)
        //$scope.test=$filter('filter')([{id:1,name:"haha"},{id:2,name:"hihi"},{id:3,name:"hihsdasd"}],{id:2},true)[0];

        $scope.myfun=function (Id) {
            var  x=$filter('filter')([{id:1,name:"haha"},{id:2,name:"hihi"},{id:3,name:"hihsdasd"}],{id:Id},true)[0];
            var y=x!=null
            return y;
        }

    });
</script>

</body>
</html>
