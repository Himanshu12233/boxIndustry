var app = angular.module('boxApp', []);

app.controller('boxCtrl', function($scope) {
  $scope.boxes = [
    {type: 'Cardboard', color: 'Brown', size: 'Small', price: 2.50},
    {type: 'Plastic', color: 'Blue', size: 'Medium', price: 5.00},
    {type: 'Metal', color: 'Silver', size: 'Large', price: 10.00},
    {type: 'Cardboard', color: 'White', size: 'Small', price: 2.00},
    {type: 'Plastic', color: 'Red', size: 'Medium', price: 4.50},
    {type: 'Metal', color: 'Gold', size: 'Large', price: 12.00}
  ];
});
