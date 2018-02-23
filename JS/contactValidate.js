ex = angular.module('contactForm',[]);


ex.controller('contactFormController',function($scope,GeneralServices,$http){
	$scope.contact = {};
	$scope.contactSuc = "";
	$scope.sendMail = function(){
	GeneralServices.sendMail($scope.contact);
	$scope.contactSuc = "You will be contacted shortly!!!";
	$scope.contact = {};
	$scope.contactForm.$setPristine();
	$scope.contactForm.$setUntouched();
	
	};
});

ex.service('GeneralServices',function($http){
	
	this.sendMail = function(newContact){
	console.log(newContact);
		$http({
				method : 'POST',
				url : 'sendMailcontact.php',
				data : newContact // forms contact object
		}).success(function(data) {
								
								});
	}
	
	
});