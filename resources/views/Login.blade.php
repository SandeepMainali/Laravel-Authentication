<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	
	<style >
        body{
            background-color: rgb(12, 56, 56);
        }
	
.container {
	width: 300px;
	height: 400px;
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
	color:rgb(81, 81, 95);
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
} */
/* .span{
    width: 500px;
	height: 45px;
	border-radius: 25px;
	background-color: rgba(0,0,0,0.1);
	border:none;
	outline: none;
	padding-left: 38px;
	box-sizing: border-box;
	font-size: 15px;
	margin-bottom: 20px;
    

} */
 
.xyz{
    color: #fff;
    position: relative;
    padding-right: 5px;
    
   

}
.span sa{
    color: blue;
}

	</style>
</head>
<body>

 <div class="container">
 	<div class="header">
 		<h1>LogIn</h1>
 	</div>

     @if(Session::has('fail'))
<span>{{Session::get('fail')}}</span>
@endif


 	<div class="main">
        <form action="{{route('loginuser')}}" method="post">
            @csrf
            
            {{-- <label>Email</label> --}}
            <input type="email" name="email" placeholder="Enter Your Email"><br>
            <span>@error('email'){{$message}} @enderror</span>
            {{-- <label>Password</label> --}}
            <input type="password" name="password" placeholder="Enter Your password"><br><br>
            <span>@error('password'){{$message}} @enderror</span>
            <button type="submit">Login</button>
            <label class="xyz">Don't have an account?</label>
            <a href="{{url('/signup')}}">Signup</a></button
        </form>
 	</div>
 </div>
 {{-- <video autoplay muted loop>
 	<source src="video.mp4" >
 </video> --}}
</body>
</html>



