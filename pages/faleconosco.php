<!-- ---EXERCÍCIO DE ENVIAR O E-MAIL---
(não funciona sem hosperdar na web, mas fiz o código)
<?php
$mensagem = 0;
@$mensagem = $_POST['mensagem'];
?>-->

<div class="linha">
    <section>
        <div class="coluna col4 sidebar">
            <h2 class="aff">Localização</h3>
            <img class="imgsobre" src="img/mapa.jpg" alt=""/>
            <ul class="sem-padding sem-marcador">
                <li>Rua Jociara Telino, 260</li>
                <li>Bairro Jardim São Paulo</li>
                <li>João Pessoa - PB</li>
            </ul>
            <h3>Contato direto</h3>
            <ul class="sem-padding sem-marcador">
                <li>E-mail: <strong>contato@wowhistory.com</strong></li>
                <li>Telefone: <strong>(83) 3223-4004</strong></li>
                <li>Facebook e Instagram: <strong>@wowhistory</strong></li>
            </ul>
        </div>
        <div class="coluna col8 contato">
            <h2 class="aff">Fale conosco</h2>

                <!-- ---EXERCÍCIO DE ENVIAR O E-MAIL---
                (não funciona sem hosperdar na web, mas fiz o código)
                <?php if($mensagem==enviado)
                echo "<h3>Mensagem enviada, agradecemos seu contato!</h3>"
                ?>-->

            <form action="mail.php" method="POST">
                <label for="nome">Seu nome:</label>
                <input type="text" name="nome" >
                <label for="email">Seu e-mail:</label>
                <input type="text" name="email">
                <label for="assunto">Assunto:</label>
                <input type="text" name="assunto">
                <label for="mensagem">Mensagem:</label>
                <textarea name="mensagem"></textarea>
                <input type="submit" class="botao" name="enviar" value="Enviar mensagem &raquo;"/>
            </form>
        </div>
    </section>
</div>