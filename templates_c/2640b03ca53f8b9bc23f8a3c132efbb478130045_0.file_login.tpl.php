<?php
/* Smarty version 5.4.3, created on 2025-02-06 13:21:12
  from 'file:login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67a4a9389cb882_26874122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2640b03ca53f8b9bc23f8a3c132efbb478130045' => 
    array (
      0 => 'login.tpl',
      1 => 1737569114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_67a4a9389cb882_26874122 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp2\\htdocs\\phploginform\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php if (!$_smarty_tpl->getValue('formSubmitted')) {?>
        <!-- pokaż tą część jeśli nie wysłaliśmy formularza -->
        <div class="container">
            <div class="col-8 col-lg-4 offset-2 offset-lg-4 text-center pt-3">
                <h1 class="mb-3">Zaloguj się</h1>
                <form action="login" method="post">
                   <!-- pole na email oraz labelka do niego -->
                   <label for="emailInput" class="form-label mb-1">Login:</label>
                    <input type="email" name="emailInput" id="emailInput" class="form-control mb-3" required>
                    <!-- pole na hasło oraz labelka do niego -->
                    <label for="passwordInput" class="form-label mb-1">Hasło:</label>
                    <input type="password" name="passwordInput" id="passwordInput" class="form-control mb-3" required>
                    <!-- guzik wyślij -->
                    <input type="submit" name="submit" value="Zaloguj" class="btn btn-primary w-100">
                </form>
            </div>
        </div>
    <?php } else { ?>
        <!-- pokaż tą część jeśli wysłaliśmy formularz -->
        <h1>Zalogowano poprawnie</h1>
        <a href="/phploginform">Powrót do głównej strony</a>
    <?php }
$_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
