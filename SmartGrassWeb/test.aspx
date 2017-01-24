<%@ Page Language="C#" %>
<!DOCTYPE html>
<html>
<head runat="server">
	<title>test</title>
	<script src="https://www.gstatic.com/firebasejs/3.6.6/firebase.js"></script>
	<script>
  	// Initialize Firebase
  	var config = {
    	apiKey: "AIzaSyBeX3VaYzcksUNSydHi0nGXmZQGMgyYQqM",
    	authDomain: "smartgrass-fdd2a.firebaseapp.com",
    	databaseURL: "https://smartgrass-fdd2a.firebaseio.com",
    	storageBucket: "smartgrass-fdd2a.appspot.com",
    	messagingSenderId: "86991733578"
  	};
  	firebase.initializeApp(config);
			

  	console.log("### firebase=",firebase);
	</script>
</head>
<body>
	<form id="form1" runat="server">
		hello
	</form>
</body>
</html>
