<?php
/* Smarty version 5.4.3, created on 2025-02-06 13:15:42
  from 'file:register.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67a4a7ee783a24_19838792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcf316240d41a1d5cc348d81110280caa25b9a10' => 
    array (
      0 => 'register.tpl',
      1 => 1737567983,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_67a4a7ee783a24_19838792 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp2\\htdocs\\phploginform-main\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php if (!$_smarty_tpl->getValue('formSubmitted')) {?>
        <div class="container">
            <div class="col-8 col-lg-4 offset-2 offset-lg-4 text-center pt-3">
                <h1 class="mb-3">Zarejestruj nowe konto</h1>
                <form action="register" method="post">
                    <!-- email i label -->
                    <label for="emailInput" class="form-label mb-1">Login:</label>
                    <input type="email" name="emailInput" id="emailInput" class="form-control mb-3" required>
                    <!-- haslo i label -->
                    <label for="passwordInput" class="form-label mb-1">Hasło:</label>
                    <input type="password" name="passwordInput" id="passwordInput" class="form-control mb-3" required>
                    <input type="submit" name="submit" value="Zarejestruj" class="btn btn-primary w-100"> 
                </form>
            </div>
        </div>
    <?php } else { ?>
        <h1>Rejestracja zakończona pomyślnie</h1>
        <a href="/phploginform">Powrót do głównej strony</a>
    <?php }
$_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
