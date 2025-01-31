<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 (ok)</title>
    <style>
        .container { display: flex; }
    </style>
</head>

<body>
    <h1>Exercício 02 (ok)</h1>
    <hr>
    <?php
    $pessoa1 = [
        "usuario" => "jon.oliva",
        "email" => "jon.oliva@savatage.com",
        "senha" => "12131jdsjka_**",
        "idade" => 65,
        "sexo" => "masculino",
        "cidade" => "São Paulo"
    ];

    $pessoa2 = [
        "usuario" => "ozzy.osbourne",
        "email" => "ozzy.osbourne@blacksabbath.com",
        "senha" => "123666aaa",
        "idade" => 70,
        "sexo" => "masculino",
        "cidade" => "Rio de Janeiro"
    ];
    ?>

    <div class="container">
        <section>
            <h2>Dados da pessoa 1</h2>
            <p>Usuário: <?= $pessoa1["usuario"] ?></p>
            <p>E-mail:
                <a href="mailto:<?= $pessoa1["email"] ?>">
                    <?= $pessoa1["email"] ?>
                </a>
            </p>
            <p>Idade: <?= $pessoa1["idade"] ?> anos</p>
            <p>Sexo: <?= $pessoa1["sexo"] ?></p>
        </section>

        <section>
            <h2>Dados da pessoa 2</h2>
            <p>Usuário: <?= $pessoa2["usuario"] ?></p>
            <p>E-mail:
                <a href="mailto:<?= $pessoa2["email"] ?>">
                    <?= $pessoa2["email"] ?>
                </a>
            </p>
            <p>Idade: <?= $pessoa2["idade"] ?> anos</p>
            <p>Sexo: <?= $pessoa2["sexo"] ?></p>
        </section>
    </div>


</body>

</html>