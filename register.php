<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/bootstrap.php';
checkUserSession('index', '.');
?>

<!DOCTYPE html>
<html>

<?php require "components/index/head.php"; ?>

<body class="black">

<?php require "components/index/nav.php"; ?>

<main class="white-text">
    <div class="parallax-container">
        <div class="parallax">
            <img src="assets/images/index/desktop-bg.jpg" alt="PSX Journal" class="bg-image">
        </div>
    
        <div class="container">
            <div class="row">
                <div class="col s12 m6 offset-m3 center-align">
                    <h1>Signup</h1>
                    <p class="lead">Start journaling today!</p>
                </div>
            </div>
            <div class="row">
                <form action="#" id="register-form" class="col s12 m6 offset-m3 form">
                    <div class="card grey darken-4">
                        <div class="row">
                            <div class="col s12">
                                <label for="full-name">Full name *</label>
                                <input type="text" id="full-name" class="browser-default text-input" required>
                                <small class="helper-text red-text" id="full-name-error"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <label for="email">Email *</label>
                                <input type="email" id="email" class="browser-default text-input" required>
                                <small class="helper-text red-text" id="email-error"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <label for="ukn">UKN</label>
                                <input type="text" id="ukn" class="browser-default text-input">
                                <small class="helper-text red-text" id="ukn-error"></small>
                            </div>
                            <div class="col s12 m6">
                                <label for="uis">UIS</label>
                                <input type="text" id="uis" class="browser-default text-input">
                                <small class="helper-text red-text" id="uis-error"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <label for="cdc-relation-no">CDC Relation Number</label>
                                <input type="text" id="cdc-relation-no" class="browser-default text-input">
                                <small class="helper-text red-text" id="cdc-relation-no-error"></small>
                            </div>
                            <div class="col s12 m6">
                                <label for="uis">CDC Account Number</label>
                                <input type="text" id="cdc-account-no" class="browser-default text-input">
                                <small class="helper-text red-text" id="cdc-account-no-error"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <label for="clearing-member-id">Clearing Member ID</label>
                                <input type="text" id="clearing-member-id" class="browser-default text-input">
                                <small class="helper-text red-text" id="clearing-member-id-error"></small>
                            </div>
                            <div class="col s12 m6">
                                <label for="client-code">Client Code</label>
                                <input type="text" id="client-code" class="browser-default text-input">
                                <small class="helper-text red-text" id="client-code-error"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <label for="password">Password *</label>
                                <input type="password" id="password" class="browser-default text-input" required>
                                <small class="helper-text red-text" id="password-error"></small>
                            </div>
                            <div class="col s12 m6">
                                <label for="password-confirm">Confirm Password *</label>
                                <input type="password" id="password-confirm" class="browser-default text-input" required>
                                <small class="helper-text red-text" id="password-confirm-error"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <input type="submit" value="Register" id="register-btn" class="center-align btn-small waves-light purple-blue-g-bg button-input">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php require "components/index/scripts.html"; ?>
<script src="assets/js/ajax/register.js"></script>
</body>
</html>