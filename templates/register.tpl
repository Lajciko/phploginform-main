{include file="header.tpl"}
    {if !$formSubmitted}
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
    {else}
        <h1>Rejestracja zakończona pomyślnie</h1>
        <a href="/phploginform">Powrót do głównej strony</a>
    {/if}
{include file="footer.tpl"}