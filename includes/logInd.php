
<div class="container-fluid">
    <div class="container">
         <div class="col-md-12">
             <div class="row">
                 <form action="login-action.php" method="post">
                     <fieldset>
                         <legend>Login i admin panel</legend>
                         <p>
                             <label for="username">Username: </label>
                             <input type="text" name="user_name" id="username" value="" />
                         </p>
                         <p>
                             <label for="password">Password: </label>
                             <input type="password" name="password" id="password" value="" />
                         </p>
                         <p>
                             <label for="remember">
                                 <input type="checkbox" name="remember" id="remember" value="1" /> Remember me
                             </label>
                         </p>
                     </fieldset>
                     <p>
                         <input type="submit" value="Submit" /> <input type="reset" value="Reset" />
                     </p>
                 </form>
             </div>
        </div>
    </div>
</div>