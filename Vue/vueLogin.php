<?php $this->titre = "Bienvenue!!" ?>
<center>
<form method="post" action="index.php?action=login">  
    <h1>Log in</h1>   
    <p>   
        <label for="login" class="login"> Your Login   </label>  
        <input id="login" name="login" required="required" type="text"/>   
    </p>  
    <p>   
        <label for="pass" class="pass"> Your password </label>  
        <input id="pass" name="pass" required="required" type="password"/>   
    </p>   
    <p class="login button">   
        <input type="submit" name="submit" value="Submit" />   
        <input type="reset" name="reset" value="Effacer" />   
    </p> 

        

</form>  
</center>