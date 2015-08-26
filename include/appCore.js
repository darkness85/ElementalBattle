
var Class = {
  create: function() {
    return function() {
      this.initialize.apply(this, arguments);
    }
  }
}

var appCore = {
	initialize: function(){
		var c = new Card('abc');
		var d = new Card('123');
		
		alert(c.v+ ' and '+d.v);
	}
	
};

var Card = Class.create();
Card.prototype = {
	v: undefined,
	initialize: function(a){
		this.v = a;
	}
	
}
/*
I have a google adsense account but I din't use it for a few years, and my account was closed. Right now I would like to reactive it. as the email stated: 
"If after your account is closed you'd like to start using AdSense again, you're welcome to request reactivation of your account at any time. Simply log into your Google Account and then visit www.google.co.uk/adsense. "
but I cant found the way to reactivate it, can you help me?
ca-pub-5089935528221066
*/