<?php /* equire_once('header.php'); ?>

<?php
	$login = $_REQUEST["login"];
	$password = $_REQUEST["password"];
	$rpassword = $_REQUEST["rpassword"];
	$email = $_REQUEST["email"];
	$pol = $_REQUEST["pol"];
	$imy = $_REQUEST["imy"];
	$fam = $_REQUEST["fam"];
	$otch = $_REQUEST["otch"];
	$reg = $_REQUEST["reg"];
	
	$vlogin = mysqli_query($connect, "SELECT Login FROM User WHERE Login = '$login'");
	$vemail = mysqli_query($connect, "SELECT Email FROM User WHERE Email = '$email'");
	$vlogin = mysqli_num_rows($vlogin);
	$vemail = mysqli_num_rows($vemail);	
	
	if ($reg == '1') {
		if (empty($login) || empty($password) || empty($email)) {
			$error = 'Вы ввели не все данные';
		} else if ($password != $rpassword) {
			$error = 'Пароли не совпадают';
		} else if (strlen($login) < 6 || preg_match("[A-Za-z0-9]",$login)) { //Не работает проверка на символы
			$error = 'Неверный логин';
		} else if (strlen($password) < 7 || preg_match("[A-Za-z0-9]",$password)) { //Не работает проверка на символы
			$error = 'Короткий пароль';
		} else if (preg_match("[A-Za-z0-9]",$email)) {
			$error = 'Некорректный E-mail';
		} else if ($vlogin > 0) {
			$error = 'Логин уже занят';
		} else if ($vemail > 0) {
			$error = 'E-mail уже зарегистрирован';
		} else {
			$password = md5($password);
			$rpassword = md5($rpassword);
			mysqli_query($connect,"INSERT INTO `user` (`id_user`, `login`, `password`, `Imy`, `Fam`, `Otch`, `Email`, `Pol`) 
			VALUES (NULL, '$login', '$password', '$Imy', '$Fam', '$Otch', '$email', '$pol')");
			$ok = 'Вы успешно зарегистрированы';
		}
	}
	
?>

<center><b><font style="font-size: 20pt">Регистрация</font></b></center>
<hr color="#CFCFCF" size="3">
<br>
<form action="reg.php" method="post">
<input type="hidden" name="reg" value="1">
<center>
<font color="red"><?php echo $error; ?></font>
<font color="green"><?php echo $ok; ?></font>
	<table cellspacing="5" style="font-size: 13pt; background: #cccccc; border-radius: 8px;">
		<tr>
			<td style="vertical-align: bottom; padding: 7px;">
				Логин:
			</td>
			<td>
			<input type="text" class="textbox" name="login" value="<?php echo $login; ?>" placeholder="Не менее 6 символов латинского алфавита" style="padding: 7px;" pattern="[A-Za-z0-9]{6,}" required>
			</tr>
		</tr>
		<tr>
			<td style="vertical-align: bottom; padding: 7px;">
				Пароль:
			</td>
			<td>
				<input type="password" class="textbox" name="password" placeholder="Не менее 6 символов латинского алфавита" style="padding: 7px;" pattern="[A-Za-z0-9]{6,}" required>
			</tr>
		</tr>
		<tr>
			<td style="vertical-align: bottom; padding: 7px;">
				Еще раз:
			</td>
			<td>
				<input type="password" class="textbox" name="rpassword" placeholder="Повторите свой пароль" style="padding: 7px;" pattern="[A-Za-z0-9]{6,}" required>
			</tr>
		</tr>
		<tr>
			<td style="vertical-align: bottom; padding: 7px;">
				Электронная почта:
			</td>
			<td>
				<input type="text" class="textbox" name="email" value="<?php echo $email; ?>" placeholder="Например, mail@yandex.ru" style="padding: 7px;" required>
			</tr>
		</tr>
		<tr>
			<td style="vertical-align: bottom; padding: 7px;">
				Имя:
			</td>
			<td>
				<input type="text" class="textbox" name="first_name" value="<?php echo $first_name; ?>" placeholder="Не объязательно, но желательно" style="padding: 7px;" pattern="[А-Яа-я]{2,}">
			</tr>
		</tr>
		<tr>
			<td style="vertical-align: bottom; padding: 7px;">
				Фамилия:
			</td>
			<td>
				<input type="text" class="textbox" name="last_name" value="<?php echo $last_name; ?>" placeholder="Не объязательно" style="padding: 7px;" pattern="[А-Яа-я]{2,}">
			</tr>
		</tr>
		<tr>
			<td style="vertical-align: bottom; padding: 7px;">
				Отчество:
			</td>
			<td>
				<input type="text" class="textbox" name="father_name" value="<?php echo $father_name; ?>" placeholder="Не объязательно" style="padding: 7px;" pattern="[А-Яа-я]{2,}">
			</tr>
		</tr>
		<tr>
			<td valign="center" style="vertical-align: bottom; padding: 7px;">
				Ваш пол:
			</td>
			<td>
				<select name="sex">
					<?php
						$sex_query = mysqli_query($connect, "SELECT * FROM pol");
						while($pol=mysqli_fetch_array($sex_query)){
							echo '<option value="'.$pol['Pol'].'">'.$pol['Name'].'</option>';
						}
					?>
				</select>
			</td>
		</tr>
		
		<tr>
			<td colspan="2">
				<center><input type="submit" value="Зарегистрироваться" class="button"></center>			
			</td>	
		</tr>
	</table>
</center>
</form>	

<?php require_once('footer.php'); */?>