<!DOCTYPE html>
<!-- doctype informa ao agente de usuario a versão do html que deve ser renderizada-->
<html lang="pt-br">
    <head>
        <title>Strata</title>
        <meta charset="utf-8">
        <meta neme="author" content="Matheus Palmieri">
        <meta name="description" content="Projeto Strata">
        <meta name="keywords" content="Projeto Strata">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
        
    </head>

    <body>

        <header class="main-header">
            <a href="index.html" class="main-header-link imagem-link"><img src="images/avatar.jpg" alt="text"></a>
            <h1 class="main-header-title"><strong>Photography</strong> is the art,<br>
                        application, and practice of<br>
                        creating durable <a href="#" class="main-header-link">images</a><br>
                        by recording light.
            </h1>
        </header>

        <main class="main-content">

            <section class="main-content-section">

            <h2>Story</h2>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['name'];
    echo "bem vindo ".($nome)."<br><br>";
}

?>

            <p>A (modular, highly tweakable) responsive one-page template designed by HTML5 UP and released for free under the Creative Commons.

                This is a Banner element, and it's generally used as an introduction or opening statement. You can customize its style, scheme, color, size, orientation, content alignment, and image position, as well as assign it an optional or transition modifier (details).</p>
            
                <a href="#" title="Get Started" class="button-default">Get Started</a>

            </section>

            <section class="main-content-setion">

                <h3>Recent Works</h3>

                <div class="row">
                    <div class="col-2">
                        <article class="recent-works-card">
                            <a class="imagem-link" href="images/fulls/01.jpg">
                                <img src="images/fulls/01.jpg" alt="description">
                            </a>
                            <p class="recent-works-card-title">Magna sed consequat tempus</p>
                            <p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
                        </article>
        
                        <article class="recent-works-card">
                            <a class="imagem-link" href="images/fulls/02.jpg">
                                <img src="images/fulls/02.jpg" alt="description">
                            </a>
                            <p class="recent-works-card-title">Ultricies lacinia interdum</p>
                            <p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
                        </article>
        
                        <article class="recent-works-card">
                            <a class="imagem-link" href="images/fulls/03.jpg">
                                <img src="images/fulls/03.jpg" alt="description">
                            </a>
                            <p class="recent-works-card-title">Tortor metus commodo</p>
                            <p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
                        </article>
                    </div>
                    
                    <div class="col-2">
                        <article class="recent-works-card">
                            <a class="imagem-link" href="images/fulls/04.jpg">
                                <img src="images/fulls/04.jpg" alt="description">
                            </a>
                            <p class="recent-works-card-title">Quam neque phasellus</p>
                            <p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
                        </article>
        
                        <article class="recent-works-card">
                            <a class="imagem-link" href="images/fulls/05.jpg">
                                <img src="images/fulls/05.jpg" alt="description">
                            </a>
                            <p class="recent-works-card-title">Nunc enim commodo aliquet</p>
                            <p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
                        </article>
        
                        <article class="recent-works-card">
                            <a class="imagem-link" href="images/fulls/06.jpg">
                                <img src="images/fulls/06.jpg" alt="description">
                            </a>
                            <p class="recent-works-card-title">Risus ornare lacinia</p>
                            <p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
                        </article>
                    </div>
                </div><!--row-->

                <a href="#" title="See Complete Portfolio" class="button-default">Full Portfolio</a>

            </section>

            <section class="main-content-setion">
                <h3>Get In Touch</h3>

                <p>Accumsan pellentesque commodo blandit enim arcu non at amet id arcu magna. Accumsan orci faucibus id eu lorem semper nunc nisi lorem vulputate lorem neque lorem ipsum dolor.</p>

                <div class="row">
                    <div class="col-2-3">
                        <form action="index.php" method="POST">
                            <div class="row">
                                <div class="col-2">
                                    <label for="name">Name</label>
                                    <input placeholder="Name" type="text" name="name" id="name">
                                </div>
                                <div class="col-2">
                                    <label for="email">E-mail</label>
                                    <input placeholder="E-mail" type="text" name="email" id="email">
                                </div>
                            </div>    
                            
                            <label for="message">Message</label>
                            <textarea name="message" id="message"></textarea>
                            <input type="submit" value="Send" class="button-default button-default-stroke button-default-big">
                        </form>
                    </div>

                    <div class="col-1-3">
                        <address>
                            <p>
                                <span>Endereço</span>
                                1234 Somewhere Rd. Nashville, TN 00000 United States
                            </p>
                            <p>
                                <span>Telefone</span>
                                000-000-000
                            </p>
                            <p>
                                <span>E-mail</span>
                                email@server.com
                            </p>
                        </address>
                    </div>
                </div><!--row-->
            </section>

            <section class="main-content-setion">

                <h3>Elements</h3>

                <h4>Text</h4>
                
                <p>
                    This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>. This is <sup>superscript</sup> text and this is <sub>subscript</sub> text. This is <u>underlined</u> and this is <code>code: for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.
                </p>

                <h1>Titulo h1</h1>
                <h2>Titulo h2</h2>
                <h3>Titulo h3</h3>
                <h4>Titulo h4</h4>
                <h5>Titulo h5</h5>
                <h6>Titulo h6</h6>

                <blockquote cite="http://developer.mozilla.org">
                    Esta é uma citação tirada da Mozilla Developer Center.
                  </blockquote>

                <p>According to Mozilla's website,
                    <q
                    cite="https://www.mozilla.org/en-US/about/history/details/">Firefox 1.0
                    was released in 2004 and became a big success.</q>
                </p>

                <h4>Preformatted</h4>

                <pre>
                    <code>
    &lt;script&gt;
        alert('oi')
    &lt;/script&gt;
                    </code>
                </pre>

                <h4>Lists</h4>

                <div class="row">
                    <div class="col-2">
                        <h5>Unordered</h5>

                <ul>
                    <li>Item 01</li>
                    <li>Item 02</li>
                    <li>Item 03</li>
                </ul>

                <h5>Ordered</h5>

                <ol>
                    <li>Item 01</li>
                    <li>Item 02</li>
                    <li>Item 03</li>
                </ol>
                    </div>
                    <div class="col-2">
                        <h5>Alternate</h5>

                <ul class="ul-alternate">
                    <li>Item 01</li>
                    <li>Item 02</li>
                    <li>Item 03</li>
                </ul>

                <h5>Icons</h5>

                <ul class="ul-icons">
                    <li><i class="fab fa-twitter"></i></li>
                    <li><i class="fab fa-github-square"></i></li>
                </ul>
                    </div>

                </div>

                <h5>Actions</h5>

                <div class="row">
                    <div class="col-2">
                        <p>
                            <a href="#" class="button-default">Default</a>
                            <a href="#" class="button-default button-default-stroke">Default</a>
                        </p>
                        
                        <p>
                            <a href="#" class="button-default button-default-small">Default</a>
                            <a href="#" class="button-default button-default-small button-default-stroke">Default</a>
                        </p>
                    </div>
                    <div class="col-2">
                        <p>
                            <a href="#" class="button-default button-default-full">Default</a>
                            <a href="#" class="button-default button-default-full button-default-stroke">Default</a>
                        </p>
                        
                        <p>
                            <a href="#" class="button-default button-default-full button-default-small">Default</a>
                            <a href="#" class="button-default button-default-full button-default-small button-default-stroke">Default</a>
                        </p>
                    </div>
                </div><!--row-->

                    <h4>Table</h4>
                    <h5>Default</h5>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>Item One</td>
                                <td>Ante turpis integer aliquet porttitor.</td>
                                <td>29.99</td>
                            </tr>

                            <tr>
                                <td>Item Two</td>
                                <td>Vis ac commodo adipiscing arcu aliquet.</td>
                                <td>19.99</td>
                            </tr>

                            <tr>
                                <td>Item Three</td>
                                <td>Morbi faucibus arcu accumsan lorem.</td>
                                <td>29.99</td>
                            </tr>

                            <tr>
                                <td>Item Four</td>
                                <td>Vitae integer tempus condimentum.</td>
                                <td>19.99</td>
                            </tr>

                            <tr>
                                <td>Item Five</td>
                                <td>Ante turpis integer aliquet porttitor.</td>
                                <td>29.99</td>
                            </tr>

                        </tbody>

                        <tfoot>
                            <tr>
                                <td colspan="2"></td>
                                <td>100.00</td>
                            </tr>
                        </tfoot>
                    </table>

                    <h5>Alternate</h5>

                    <table class="table table-alternate">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Item One</td>
                                <td>Ante turpis integer aliquet porttitor.</td>
                                <td>29.99</td>
                            </tr>

                            <tr>
                                <td>Item Two</td>
                                <td>Vis ac commodo adipiscing arcu aliquet.</td>
                                <td>19.99</td>
                            </tr>

                            <tr>
                                <td>Item Three</td>
                                <td>Morbi faucibus arcu accumsan lorem.</td>
                                <td>29.99</td>
                            </tr>

                            <tr>
                                <td>Item Four</td>
                                <td>Vitae integer tempus condimentum.</td>
                                <td>19.99</td>
                            </tr>

                            <tr>
                                <td>Item Five</td>
                                <td>Ante turpis integer aliquet porttitor.</td>
                                <td>29.99</td>
                            </tr>
                        </tbody>

                        <tfoot>
                            <tr>
                                <td colspan="2"></td>
                                <td>100.00</td>
                            </tr>
                        </tfoot>
                    </table>

            <h5>Buttons</h5>

            <p>
                <button class="button-default">Default</button>
                <button class="button-default button-default-stroke">Default</button>
            </p>

            <p>
                <button class="button-default button-default-small">Default</button>
                <button class="button-default button-default-small button-default-stroke">Default</button>
            </p>

            <p>
                <button class="button-default button-default-full button-default-small">Default</button>
                <button class="button-default button-default-full button-default-small button-default-stroke">Default</button>
            </p>
            
            <input type="submit" value="Send">

            <h5>Forms</h5>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projeto_teste";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, name, email FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " Email: " . $row["email"]. "<br>";
    }
    } else {
    echo "0 results";
    }
    $conn->close();
?>

            <form action="response_post.php" method="post" >
                <label for="name">Name</label>
                <input type="text" name="name" id="name">

                <label for="email">E-mail</label>
                <input type="email" name="email" id="email">

                <select>
                    <option value="0">Select</option>
                    <option value="1">HTML</option>
                    <option value="2">CSS</option>
                    <option value="3">JavaScript</option>
                </select>

                <label><input type="radio" value="low" name="priority"> Low Priority</label>
                <label><input type="radio" value="medium" name="priority"> Medium Priority</label>
                <label><input type="radio" value="high" name="priority"> High Priority</label>

                <label><input type="checkbox" name="copy" value="1">E-mail me a copy of this message</label>
                <label><input type="checkbox" name="copy" value="1">I am a human and not a robot</label>

                <label for="msg">Message</label>
                <textarea placeholder="message" id="msg"></textarea>

                <input type="submit" class="button-default button-default-big" value="Send">
                <input type="reset" class="button-default button-default-big button-default-stroke" value="Reset">
            </form>

        </section>

        <section class="main-content-section">
            <h3>Images</h3>

            <div class="gallery-img">
                <img src="images/fulls/01.jpg" alt="#">
            </div>

            <div class="gallery-thumblr row">
                <img class="col-1-3" src="images/thumbs/02.jpg" alt="#">
                <img class="col-1-3" src="images/thumbs/03.jpg" alt="#">
                <img class="col-1-3" src="images/thumbs/01.jpg" alt="#">
                <img class="col-1-3" src="images/thumbs/04.jpg" alt="#">
                <img class="col-1-3" src="images/thumbs/05.jpg" alt="#">
                <img class="col-1-3" src="images/thumbs/06.jpg" alt="#">
                <img class="col-1-3" src="images/thumbs/02.jpg" alt="#">
                <img class="col-1-3" src="images/thumbs/01.jpg" alt="#">
                <img class="col-1-3" src="images/thumbs/03.jpg" alt="#">
            </div>

            <h4>Left &amp; Right</h4>

            <p>
                <img src="images/avatar.jpg" alt="#" class="img-left"> Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.
            </p>

            <p>
                <img src="images/avatar.jpg" alt="#" class="img-right"> Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.
            </p>

        </section>

        </main>

        <footer class="main-footer"></footer>

    </body>
</html>
