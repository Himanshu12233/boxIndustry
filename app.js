var app = angular.module('boxApp', []);

app.controller('boxController', function() {
  var products = [
       { name: 'Box A', description: 'A sturdy cardboard box with dimensions 10" x 10" x 10".', price: 10.00, image: 'box-a.jpg' },
       { name: 'Box B', description: 'A corrugated box with dimensions 12" x 12" x 12".', price: 20.00, image: 'box-b.jpg' },
       { name: 'Box C', description: 'A kraft paper box with dimensions 8" x 8" x 8".', price: 15.00, image: 'box-c.jpg' },
       { name: 'Box D', description: 'A heavy-duty cardboard box with dimensions 14" x 14" x 14".', price: 25.00, image: 'box-d.jpg' },
       { name: 'Box E', description: 'A corrugated mailer box with dimensions 6" x 6" x 6".', price: 30.00, image: 'box-e.jpg' }
   ];

   var ctrl = this;
   ctrl.products = products;
});
