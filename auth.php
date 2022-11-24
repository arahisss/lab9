<?php require("blocks/header.php"); ?>


            <div class="form-block form-auth">
                <form action="#" class="form" method="post" enctype="multipart/form-data">
                    <h1>Аутентификация</h1>

                    <label  for="login">Логин</label>
                    <input id="login" type="text" name="login">

                    <label for="password">Пароль</label>
                    <input type="password" name="password">

                    <div class="remember">
                        <input type="checkbox"><label>Запомнить меня</label>
                    </div>

                    <div class="but">
                        <input type="submit" name="" id="button-submit">
                    </div>
                    
                    
                </form>
            </div>

<?php require("blocks/footer.php") ?>