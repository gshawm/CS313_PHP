<!--action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"-->
<form name="signup" ng-submit="signup.$valid && signup.register()" method="post" novalidate>
    Username: <input ng-model="username" type="text" name="username" required/><br />
    Password: <input ng-model="password" type="password" name="password" required/><br />
    Email: <input ng-model="email" type="email" name="email" required/><br />

    <input type="submit" name="submit" value="Register" />
</form>