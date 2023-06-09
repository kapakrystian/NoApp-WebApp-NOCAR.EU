<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="public/style.css" />
    <title>Register Page</title>
</head>

<body>

    <section class="d-flex justify-content-center align-items-center me-lg-4">
        <div class="container-fluid mt-5 pt-5">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                    <h5 class="mt-5 md-3 text-uppercase">Rejestracja do systemu NoApp</h5>
                    <div class="mt-4 card user-inf">
                        <div class="card-body">
                            <form action="/register/create" method="POST" id="signup">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" required>
                                <label for="username" class="mt-2 form-label">Nazwa użytkownika</label>
                                <input type="text" name="username" class="form-control" id="username" required>
                                <label for="password" class="mt-2 form-label">Hasło</label>
                                <input type="password" name="password" class="form-control" id="password" minlength="8" pattern="^(?=.*\d).{8,}$" title="Hasło musi zawierać minimum 8 znaków, w tym jedną cyfrę." required>
                                <label for="name_surname" class="mt-2 form-label">Imię i nazwisko</label>
                                <input type="text" name="name_surname" class="form-control" pattern="[A-ZŁŚ]{1}[a-ząęćżźńłóś]*\s[A-ZŁŚ]{1}[a-ząęćżźńłóś]*" title="Wprowadź poprawne imię i nazwisko z wielkich liter, oddzielone spacją" id="name_surname" required>
                                <label for="phone" class="mt-2 form-label">Numer telefonu</label>
                                <input type="tel" name="phone" class="form-control" id="phone" pattern="[0-9]{9}" title="Wpisz 9-cyfrowy numer telefonu" required>
                                <div class="text-center mt-3">
                                    <button class="btn btn-dark" type="submit" name="signupBtn" value="Signup">Utwórz konto</button>
                                </div>
                                <div class="mt-3">
                                    <span>Posiadasz konto? <a class="text-decoration-none" href="login">Zaloguj się</span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>