<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- jQuery library -->
        <script src="jquery.slim.min.js"></script>
        <!-- Popper JS -->
        <script src="popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="bootstrap.bundle.min.js"></script>
        <script src="function.js"></script>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link
            rel="preconnect"
            href="https://fonts.gstatic.com"
            crossorigin=""
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@600&amp;family=Source+Sans+Pro:wght@200&amp;family=Staatliches&amp;family=Ubuntu&amp;display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;display=swap"
            rel="stylesheet"
        />

        <title>Oxlazel Reroller</title>
        <link rel="icon" type="image/x-icon" href="images/logo.png" />
    </head>
    <body>
        <h1 class="text-center bg-dark text-light">
          Oxlazel Reroller 
        </h1>

        <p id="jubilife" class="font-weight-bold text-right">by BigMo</p>
        <h1 class="border-bottom border-dark">Traits</h1>
        <span class="game-font GFG">Trait Chances</span>
        <table style="background-color: black">
            <tbody>
                <tr class="rare">
                    <td><img src="images/trait_superior.png" /></td>
                    <td id="middle_column">Superior</td>
                    <td>29.97%</td>
                </tr>
                <tr class="rare">
                    <td><img src="images/trait_nimble.png" /></td>
                    <td>Nimble</td>
                    <td>24.98%</td>
                </tr>
                <tr class="rare">
                    <td><img src="images/trait_range.png" /></td>
                    <td>Range</td>
                    <td>24.98%</td>
                </tr>
                <tr class="legendary">
                    <td><img src="images/trait_adept.png" /></td>
                    <td>Adept</td>
                    <td>9.99%</td>
                </tr>
                <tr class="legendary">
                    <td><img src="images/trait_culling.png" /></td>
                    <td>Culling</td>
                    <td>5%</td>
                </tr>
                <tr class="legendary">
                    <td><img src="images/trait_sniper.png" /></td>
                    <td>Sniper</td>
                    <td>2.5%</td>
                </tr>
                <tr class="legendary">
                    <td><img src="images/trait_godspeed.png" /></td>
                    <td>Godspeed</td>
                    <td>1%</td>
                </tr>
                <tr class="mythic">
                    <td><img src="images/trait_reaper.png" /></td>
                    <td>Reaper</td>
                    <td>0.8%</td>
                </tr>
                <tr class="mythic">
                    <td><img src="images/trait_celestial.png" /></td>
                    <td>Celestial</td>
                    <td>0.36%</td>
                </tr>
                <tr class="mythic">
                    <td><img src="images/trait_divine.png" /></td>
                    <td>Divine</td>
                    <td>0.2%</td>
                </tr>
                <tr class="mythic">
                    <td><img src="images/trait_golden.png" /></td>
                    <td>Golden</td>
                    <td>0.15%</td>
                </tr>
                <tr class="mythic">
                    <td><img src="images/trait_unique.png" /></td>
                    <td>Unique</td>
                    <td>0.1%</td>
                </tr>
            </tbody>
        </table>

        <br />
        <button onclick="roll_trait()">Reroll</button>
        <button onclick="reset()">Reset</button>
        <br /><br />
        <button onclick="roll_until()">Roll for Trait</button>

        <select name="choices" id="choices" class="mythic">
            <option value="mythic">Mythic Trait</option>
            <option value="Unique">Unique</option>
            <option value="Golden">Golden</option>
            <option value="Divine">Divine</option>
            <option value="Celestial">Celestial</option>
        </select>

        <p id="trait"></p>
        <p id="score" class="game-font">Rerolls Spent: 0</p>
        <p id="icon" style="width: 50%"></p>

        <div style="background-color: black"></div>
    </body>
</html>
