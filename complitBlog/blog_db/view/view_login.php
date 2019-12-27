
<!-- <div class="content">
	<a href="index.php">Home</a>
	<hr>
	<p>
		<span class="error"><?//=@$_SESSION['error']?></span>
		<span class="error"><?//=@$_SESSION['error1']?></span>
	</p>
	<form method="POST">
		<p>
		       <label for="newsName">Логин:</label>
		       <input type="text" name="login" id="newsName" value="<?//=@$log;?>"><br>
		<p>
			<label class="text" for="Password_one">Пароль:</label>
			<input type="password" name="password" id="Password_one" value="<?//=@$pass;?>"><br>
		</p>
		 <br>
		<p>
			<label class="checkbox" for="Password_to_one">Запомнить меня</label>
			<input type="checkbox" name="remember" id="Password_to_one" value="on"><br>
		</p>
		<input type="submit" value="Войти">
	</form>
</div> -->
<div class="col-md-9 m-right">
<div class="row">
<div class="col-md-12" id="m-contact" data-animated="0">
	<p>
		<span class="error"><?//=@$_SESSION['error']?></span>
		<span class="error"><?//=@$_SESSION['error1']?></span>
	</p>
    <h3>Send us a message</h3>

    <form class="contact-form" data-animated="0" id="contactForm" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="mc-name">
                    <input type="text" name="login" id="senderName" placeholder="login" Required>
                    <span><i class="fa fa-user"></i></span>
                </div>
                <div class="mc-website">
                    <input type="password" name="password" id="subject" placeholder="subject" value="<?=@$pass;?>">
                    <span><i class="fa fa-link"></i></span>
                </div>
				<p>
					<label class="checkbox" for="Password_to_one">Запомнить меня</label>
					<input type="checkbox" name="remember" id="Password_to_one" value="on"><br>
				</p>
            </div>
            <div class="col-md-6">
                <div class="mc-message">
                    <button type="submit"><span>login</span></button>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
</div>