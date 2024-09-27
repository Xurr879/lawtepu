<head > 
    <script src="{{ asset('function.js') }}"></script>
    {{-- <script src="{{ asset('style.css') }}"></script> --}}
    <link rel="stylesheet" href="style.css" />
    <h1>Oxlazel Reroller</h1>
    <h2>By BMBB</h2>
    <link rel="icon" type="image/x-icon" href="img/trait/logo.png" />
</head>
<body style=" background-color: rgb(0, 0, 0) ">
    
    <span class="game-font GFG" style="color: white" >Trait Chances</span>
    <table style="background-color: rgb(0, 0, 0)">
        <tbody>
            <tr class="rare">
                <td><img src="img/trait/trait_superior.png" width="50px"/></td>
                <td id="middle_column style=">Superior</td>
                <td>29.97%</td>
            </tr>
            <tr class="rare">
                <td><img src="img/trait/trait_nimble.png" width="50px"/></td>
                <td>Nimble</td>
                <td>24.98%</td>
            </tr>
            <tr class="rare">
                <td><img src="img/trait/trait_range.png" width="50px"/></td>
                <td>Range</td>
                <td>24.98%</td>
            </tr>
            <tr class="legendary">
                <td><img src="img/trait/trait_adept.png" width="50px"/></td>
                <td>Adept</td>
                <td>9.99%</td>
            </tr>
            <tr class="legendary">
                <td><img src="img/trait/trait_culling.png" width="50px"/></td>
                <td>Culling</td>
                <td>5%</td>
            </tr>
            <tr class="legendary">
                <td><img src="img/trait/trait_sniper.png" width="50px"/></td>
                <td>Sniper</td>
                <td>2.5%</td>
            </tr>
            <tr class="legendary">
                <td><img src="img/trait/trait_godspeed.png" width="50px"/></td>
                <td>Godspeed</td>
                <td>1%</td>
            </tr>
            <tr class="mythic">
                <td><img src="img/trait/trait_reaper.png" width="50px"/></td>
                <td>Reaper</td>
                <td>0.8%</td>
            </tr>
            <tr class="mythic">
                <td><img src="img/trait/trait_celestial.png" width="50px"/></td>
                <td>Celestial</td>
                <td>0.36%</td>
            </tr>
            <tr class="mythic">
                <td><img src="img/trait/trait_divine.png" width="50px"/></td>
                <td>Divine</td>
                <td>0.2%</td>
            </tr>
            <tr class="mythic">
                <td><img src="img/trait/trait_golden.png" width="50px"/></td>
                <td>Golden</td>
                <td>0.15%</td>
            </tr>
            <tr class="mythic">
                <td><img src="img/trait/trait_unique.png" width="50px"/></td>
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

    <select name="choices" id="choices" class="mythic" >
        <option value="mythic">Mythic Trait</option>
        <option value="Unique">Unique</option>
        <option value="Golden">Golden</option>
        <option value="Divine">Divine</option>
        <option value="Celestial">Celestial</option>
    </select>

    <p id="trait"></p>
    <p id="score" class="game-font" p style="color: white" >Rerolls Spent: 0</p>
    <p id="icon" style="width: 50%"></p>

</body>