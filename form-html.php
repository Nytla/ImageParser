<h2>Парсер изображений</h2>
Введите URL: <br />
<form action="/wp-admin/admin.php?page=parser" id="form1" method="post">
    <input type="text" name="url" >
    <input type="submit" name="submit" value="Go!">
</form>
<br/>
<b>URL:</b> <?php echo $_POST['url']; ?> <br/>
