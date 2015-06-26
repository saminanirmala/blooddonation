@extends('layouts.logindefault')
@section('content')

<body>

<div id="login">

    <h2><span class="fontawesome-lock"></span>Sign In</h2>

    <form action="javascript:void(0);" method="POST">

        <fieldset>

            <p><label for="email">E-mail address</label></p>
            <p><input type="email" id="email" value="mail@address.com" onBlur="if(this.value=='')this.value='mail@address.com'" onFocus="if(this.value=='mail@address.com')this.value=''"></p> <!-- JS because of IE support; better: placeholder="mail@address.com" -->

            <p><label for="password">Password</label></p>
            <p><input type="password" id="password" value="password" onBlur="if(this.value=='')this.value='password'" onFocus="if(this.value=='password')this.value=''"></p> <!-- JS because of IE support; better: placeholder="password" -->

            <p><input type="submit" value="Sign In"></p>

        </fieldset>

    </form>

</div> <!-- end login -->

</body>
</html>