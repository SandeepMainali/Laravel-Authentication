<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<style >

        body{
            background-color: rgb(12, 56, 56);
        }

.container {
	width: 300px;
	height: 450px;
	margin:7% auto;
	border-radius: 25px;
	background-color: rgba(0,0,0,0.1);
	box-shadow: 0 0 17px #fff;
}

.header {
	text-align: center;
 	padding-top: 75px;
  	
}

.header h1 {
	color:whitesmoke;
    text-align: center;
	font-size: 30px;
    
}

.main {
	text-align: center;
}

.main input, button {
	width: 270px;
	height: 45px;
	border-radius: 25px;
	background-color: rgba(0,0,0,0.1);
	border:none;
	outline: none;
	padding-left: 38px;
	box-sizing: border-box;
	font-size: 15px;
	margin-bottom: 20px;
}

.main button {
	padding-left: 0;
	border-radius: 25px;
	background-color: rgba(0,0,0,0.1);
	letter-spacing: 1px;
	font-weight: bold;
	margin-bottom: 20px;
}

.main button:hover {
	box-shadow: 2px 2px 5px #fff;
	border-radius: 25px;
	background-color: rgba(0,0,0,0.1);
	}
.main input:hover {
	box-shadow: 2px 2px 5px #fff;
	border-radius: 25px;
	background-color: rgba(0,0,0,0.1);
	}

/* .main span {
	position: relative;
}

.main i {
	position: absolute;
	left: 15px;
	color: #fff;
	font-size: 16px;
	top: 2px;
} */
/* .col{
	color: #fff;
} */
	</style>
</head>
<body>

 <div class="container">
 	<div class="header">
 		<h1>Signup</h1>
 	</div>


     @if(Session::has('fail'))
     <span>{{Session::get('fail')}}</span>
     @endif


 	<div class="main">
        <form action="{{route('signupuser')}}" method="post">
            @csrf
            
            <input type="name" name="name" placeholder="Enter Your Name"><br>
            <span>@error('name'){{$message}} @enderror</span>
            
            <input type="email" name="email" placeholder="Enter Your Email"><br>
            <span>@error('email'){{$message}} @enderror</span>
            
            <input type="password" name="password" placeholder="Enter Your password">
            <span>@error('name'){{$message}} @enderror</span>
            <br><br>
            <button type="submit">Signup</button>
        </form>
 	</div>
 </div>
</body>
</html>
