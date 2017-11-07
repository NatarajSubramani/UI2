<!DOCTYPE HTML>
<html>
	<head>
		<title>Test Solution</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="main.css" />
		<link type="text/css" media="all" rel="stylesheet" href="style.css">
	</head>

<script>
    function CreateTableFromJSON() {
        var myBooks =  [
		{
                                "Rank": 1,
                                "Fund": "7IM AAP Adventurous C Acc",
                                "Group": "7IM Investment Funds|CFIM",
								"Focus": "Equity",
                                "Yield": 1.5,
                                "1Y": 21.051114,
                                "3Y": 31.467272,
                                "5Y": 55.113164,
                                "Del_function": "Y"
                }, {
                                "Rank": 2,
								"Fund": "7IM AAP Balanced C Acc",
                                "Group": "7IM Investment Funds|CFIM",
								"Focus": "Equity",
                                "Yield": 1.5,
                                "1Y": 15.684609,
                                "3Y": 20.666394,
                                "5Y": 32.058166,
                                "Del_function": "Y"
                }, {
                                "Rank": 3,
								"Fund": "7IM Investment Funds|CFIM",
                                "Group": "7IM AAP Moderately Adventurous C Acc",
								"Focus": "Equity",
                                "Yield": 1.5,
                                "1Y": 19.496989,
                                "3Y": 29.051262,
                                "5Y": 49.583186,
                                "Del_function": "Y"
                }, {
                                "Rank": 4,
								"Fund": "7IM Investment Funds|CFIM",
                                "Group": "7IM AAP Moderately Cautious C Acc",
								"Focus": "Equity",
                                "Yield": 1.5,
                                "1Y": 8.435684,
                                "3Y": 15.630147,
                                "5Y": 27.037739,
                                "Del_function": "Y"
                }, {
                                "Rank": 5,
								"Fund": "7IM Investment Funds|CFIM",
                                "Group": "7IM Adventurous C Acc",
								"Focus": "Money Market",
                                "Yield": 1.5,
                                "1Y": 22.525248,
                                "3Y": 33.720249,
                                "5Y": 61.224883,
                                "Del_function": "Y"
                },{
                                "Rank": 6,
								"Fund": "7IM Investment Funds|CFIM",
                                "Group": "7IM Balanced C Acc",
								"Focus": "Equity",
                                "Yield": 1.5,
                                "1Y": 15.728494,
                                "3Y": 22.04988,
                                "5Y": 39.669263,
                                "Del_function": "Y"
                }, {
                                "Rank": 7,
								"Fund": "7IM Investment Funds|CFIM",
                                "Group": "7IM Balanced C Acc",
								"Focus": "Mixed Asset",
                                "Yield": 1.5,
                                "1Y": 15.728494,
                                "3Y": 22.04988,
                                "5Y": 39.669263,
                                "Del_function": "Y"
                }, {
                                "Rank": 8,
								"Fund": "7IM Investment Funds|CFIM",
                                "Group": "7IM Emerging Markets Equity Value C Inc",
								"Focus": "Mixed Asset",
                                "Yield": 1.5,
                                "1Y": 43.702938,
                                "3Y": 12.200000,
                                "5Y": 10.252025,
                                "Del_function": "Y"
                }, {
                                "Rank": 9,
								"Fund": "7IM Investment Funds|CFIM",
                                "Group": "7IM European (ex UK) Equity Value C Inc",
								"Focus": "Mixed Asset",
                                "Yield": 1.5,
                                "1Y": 20.105101,
                                "3Y": 10.200000,
                                "5Y": 11.252025,
                                "Del_function": "Y"
                }, {
                                "Rank": 10,
								"Fund": "7IM Investment Funds|CFIM",
                                "Group": "7IM Moderately Adventurous C Acc",
								"Focus": "Mixed Asset",
                                "Yield": 1.5,
                                "1Y": 11.105101,
                                "3Y": 16.200000,
                                "5Y": 20.252025,
                                "Del_function": "Y"
                }, {
                                "Rank": 1,
                                "Fund": "7IM AAP Adventurous C Acc",
                                "Group": "7IM Investment Funds|CFIM",
								"Focus": "Equity",
                                "Yield": 1.5,
                                "1Y": 21.051114,
                                "3Y": 31.467272,
                                "5Y": 55.113164,
                                "Del_function": "Y"
                }, {
                                "Rank": 2,
								"Fund": "7IM AAP Balanced C Acc",
                                "Group": "7IM Investment Funds|CFIM",
								"Focus": "Equity",
                                "Yield": 1.5,
                                "1Y": 15.684609,
                                "3Y": 20.666394,
                                "5Y": 32.058166,
                                "Del_function": "Y"
                }, {
                                "Rank": 3,
								"Fund": "7IM Investment Funds|CFIM",
                                "Group": "7IM AAP Moderately Adventurous C Acc",
								"Focus": "Equity",
                                "Yield": 1.5,
                                "1Y": 19.496989,
                                "3Y": 29.051262,
                                "5Y": 49.583186,
                                "Del_function": "Y"
                }, {
                                "Rank": 4,
								"Fund": "7IM Investment Funds|CFIM",
                                "Group": "7IM AAP Moderately Cautious C Acc",
								"Focus": "Equity",
                                "Yield": 1.5,
                                "1Y": 8.435684,
                                "3Y": 15.630147,
                                "5Y": 27.037739,
                                "Del_function": "Y"
                }, {
                                "Rank": 5,
								"Fund": "7IM Investment Funds|CFIM",
                                "Group": "7IM Adventurous C Acc",
								"Focus": "Money Market",
                                "Yield": 1.5,
                                "1Y": 22.525248,
                                "3Y": 33.720249,
                                "5Y": 61.224883,
                                "Del_function": "Y"
                }, {
                                "Rank": 6,
								"Fund": "7IM Investment Funds|CFIM",
                                "Group": "7IM Balanced C Acc",
								"Focus": "Equity",
                                "Yield": 1.5,
                                "1Y": 15.728494,
                                "3Y": 22.04988,
                                "5Y": 39.669263,
                                "Del_function": "Y"
                }, {
                                "Rank": 7,
								"Fund": "7IM Investment Funds|CFIM",
                                "Group": "7IM Balanced C Acc",
								"Focus": "Mixed Asset",
                                "Yield": 1.5,
                                "1Y": 15.728494,
                                "3Y": 22.04988,
                                "5Y": 39.669263,
                                "Del_function": "Y"
                }, {
                                "Rank": 8,
								"Fund": "7IM Investment Funds|CFIM",
                                "Group": "7IM Emerging Markets Equity Value C Inc",
								"Focus": "Mixed Asset",
                                "Yield": 1.5,
                                "1Y": 43.702938,
                                "3Y": 12.200000,
                                "5Y": 10.252025,
                                "Del_function": "Y"
                }, {
                                "Rank": 9,
								"Fund": "7IM Investment Funds|CFIM",
                                "Group": "7IM European (ex UK) Equity Value C Inc",
								"Focus": "Mixed Asset",
                                "Yield": 1.5,
                                "1Y": 20.105101,
                                "3Y": 10.200000,
                                "5Y": 11.252025,
                                "Del_function": "Y"
                }, {
                                "Rank": 10,
								"Fund": "7IM Investment Funds|CFIM",
                                "Group": "7IM Moderately Adventurous C Acc",
								"Focus": "Mixed Asset",
                                "Yield": 1.5,
                                "1Y": 11.105101,
                                "3Y": 16.200000,
                                "5Y": 20.252025,
                                "Del_function": "Y"
                } ,{
                                "Rank": 1,
                                "Fund": "BPM Trust Acc",
                                "Group": "7IM Investment Funds|CFIM",
								"Focus": "Equity",
                                "Yield": 1.5,
                                "1Y": 21.051114,
                                "3Y": 31.467272,
                                "5Y": 55.113164,
                                "Del_function": "Y"
                }, {
                                "Rank": 2,
								"Fund": "Broadway ICVC Balanced",
                                "Group": "7IM Investment Funds|CFIM",
								"Focus": "Equity",
                                "Yield": 1.5,
                                "1Y": 15.684609,
                                "3Y": 20.666394,
                                "5Y": 32.058166,
                                "Del_function": "Y"
                }, {
                                "Rank": 3,
								"Fund": "Broadway ICVC Growth",
                                "Group": "7IM AAP Moderately Adventurous C Acc",
								"Focus": "Equity",
                                "Yield": 1.5,
                                "1Y": 19.496989,
                                "3Y": 29.051262,
                                "5Y": 49.583186,
                                "Del_function": "Y"
                }, {
                                "Rank": 4,
								"Fund": "BlackRock 100 UK Equity Tracker D Acc",
                                "Group": "7IM AAP Moderately Cautious C Acc",
								"Focus": "Equity",
                                "Yield": 1.5,
                                "1Y": 8.435684,
                                "3Y": 15.630147,
                                "5Y": 27.037739,
                                "Del_function": "Y"
                }, {
                                "Rank": 5,
								"Fund": "Baring Targeted Return Gross Inc",
                                "Group": "7IM Adventurous C Acc",
								"Focus": "Money Market",
                                "Yield": 1.5,
                                "1Y": 22.525248,
                                "3Y": 33.720249,
                                "5Y": 61.224883,
                                "Del_function": "Y"
                }, {
                                "Rank": 6,
								"Fund": "BlackRock Sterling Strategic Bond D Acc",
                                "Group": "7IM Balanced C Acc",
								"Focus": "Equity",
                                "Yield": 1.5,
                                "1Y": 15.728494,
                                "3Y": 22.04988,
                                "5Y": 39.669263,
                                "Del_function": "Y"
                }, {
                                "Rank": 7,
								"Fund": "BlackRock UK D Acc",
                                "Group": "7IM Balanced C Acc",
								"Focus": "Mixed Asset",
                                "Yield": 1.5,
                                "1Y": 15.728494,
                                "3Y": 22.04988,
                                "5Y": 39.669263,
                                "Del_function": "Y"
                }, {
                                "Rank": 8,
								"Fund": "BlackRock US Dynamic D Acc",
                                "Group": "7IM Emerging Markets Equity Value C Inc",
								"Focus": "Mixed Asset",
                                "Yield": 1.5,
                                "1Y": 43.702938,
                                "3Y": 12.200000,
                                "5Y": 10.252025,
                                "Del_function": "Y"
                }, {
                                "Rank": 9,
								"Fund": "BlackRock US Dynamic D Acc",
                                "Group": "7IM European (ex UK) Equity Value C Inc",
								"Focus": "Mixed Asset",
                                "Yield": 1.5,
                                "1Y": 20.105101,
                                "3Y": 10.200000,
                                "5Y": 11.252025,
                                "Del_function": "Y"
                }, {
                                "Rank": 10,
								"Fund": "BlackRock US Dynamic D Acc",
                                "Group": "7IM Moderately Adventurous C Acc",
								"Focus": "Mixed Asset",
                                "Yield": 1.5,
                                "1Y": 11.105101,
                                "3Y": 16.200000,
                                "5Y": 20.252025,
                                "Del_function": "Y"
                } ,{
                                "Rank": 1,
                                "Fund": "CF IM UK Growth A Inc",
                                "Group": "7IM Investment Funds|CFIM",
								"Focus": "Equity",
                                "Yield": 1.5,
                                "1Y": 21.051114,
                                "3Y": 31.467272,
                                "5Y": 55.113164,
                                "Del_function": "Y"
                }, {
                                "Rank": 2,
								"Fund": "CF Lindsell Train UK Equity Acc",
                                "Group": "7IM Investment Funds|CFIM",
								"Focus": "Equity",
                                "Yield": 1.5,
                                "1Y": 15.684609,
                                "3Y": 20.666394,
                                "5Y": 32.058166,
                                "Del_function": "Y"
                }, {
                                "Rank": 3,
								"Fund": "CF Miton Cautious Multi Asset B GBP",
                                "Group": "7IM AAP Moderately Adventurous C Acc",
								"Focus": "Equity",
                                "Yield": 1.5,
                                "1Y": 19.496989,
                                "3Y": 29.051262,
                                "5Y": 49.583186,
                                "Del_function": "Y"
                }, {
                                "Rank": 4,
								"Fund": "CF Mulberry Inc",
                                "Group": "7IM AAP Moderately Cautious C Acc",
								"Focus": "Equity",
                                "Yield": 1.5,
                                "1Y": 8.435684,
                                "3Y": 15.630147,
                                "5Y": 27.037739,
                                "Del_function": "Y"
                }, {
                                "Rank": 5,
								"Fund": "CF Purisima UK Total Return B PCG",
                                "Group": "7IM Adventurous C Acc",
								"Focus": "Money Market",
                                "Yield": 1.5,
                                "1Y": 22.525248,
                                "3Y": 33.720249,
                                "5Y": 61.224883,
                                "Del_function": "Y"
                }, {
                                "Rank": 6,
								"Fund": "CF Stewart Ivory Invest Mkt Acc",
                                "Group": "7IM Balanced C Acc",
								"Focus": "Equity",
                                "Yield": 1.5,
                                "1Y": 15.728494,
                                "3Y": 22.04988,
                                "5Y": 39.669263,
                                "Del_function": "Y"
                }, {
                                "Rank": 7,
								"Fund": "CF Waverton Portfolio B",
                                "Group": "7IM Balanced C Acc",
								"Focus": "Mixed Asset",
                                "Yield": 1.5,
                                "1Y": 15.728494,
                                "3Y": 22.04988,
                                "5Y": 39.669263,
                                "Del_function": "Y"
                }, {
                                "Rank": 8,
								"Fund": "Charinco Common Invest Gr Acc",
                                "Group": "7IM Emerging Markets Equity Value C Inc",
								"Focus": "Mixed Asset",
                                "Yield": 1.5,
                                "1Y": 43.702938,
                                "3Y": 12.200000,
                                "5Y": 10.252025,
                                "Del_function": "Y"
                }, {
                                "Rank": 9,
								"Fund": "Charity Multi Asset A Acc",
                                "Group": "7IM European (ex UK) Equity Value C Inc",
								"Focus": "Mixed Asset",
                                "Yield": 1.5,
                                "1Y": 20.105101,
                                "3Y": 10.200000,
                                "5Y": 11.252025,
                                "Del_function": "Y"
                }, {
                                "Rank": 10,
								"Fund": "Close Balanced Portfolio X Acc",
                                "Group": "7IM Moderately Adventurous C Acc",
								"Focus": "Mixed Asset",
                                "Yield": 1.5,
                                "1Y": 11.105101,
                                "3Y": 16.200000,
                                "5Y": 20.252025,
                                "Del_function": "Y"
                } 
]
        // EXTRACT VALUE FOR HTML HEADER. 
        // ('Book ID', 'Book Name', 'Category' and 'Price')
        var col = [];
        for (var i = 0; i < myBooks.length; i++) {
            for (var key in myBooks[i]) {
                if (col.indexOf(key) === -1) {
                    col.push(key);
                }
            }
        }

        // CREATE DYNAMIC TABLE.
        var table = document.createElement("table");

        // CREATE HTML TABLE HEADER ROW USING THE EXTRACTED HEADERS ABOVE.

        var tr = table.insertRow(-1);                   // TABLE ROW.

        for (var i = 0; i < col.length; i++) {
            var th = document.createElement("th");      // TABLE HEADER.
            th.innerHTML = col[i];
            tr.appendChild(th);
        }

        // ADD JSON DATA TO THE TABLE AS ROWS.
        for (var i = 0; i < myBooks.length; i++) {

            tr = table.insertRow(-1);

            for (var j = 0; j < col.length; j++) {
                var tabCell = tr.insertCell(-1);
                tabCell.innerHTML = myBooks[i][col[j]];
            }
        }

        // FINALLY ADD THE NEWLY CREATED TABLE WITH JSON DATA TO A CONTAINER.
        var divContainer = document.getElementById("showData");
        divContainer.innerHTML = "";
        divContainer.appendChild(table);
    }




</script>

	<body class="subpage">
		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.php" class="logo">Test Solution</a>
					<nav id="nav">
						<a href="tab.php">Tab View</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>
		<!-- Three -->
			<section id="three" class="wrapper">
				<header class="align-center"><h2>Test Solutions</h2></header>
				<div class="inner" style="">

    <style>
        table, th, td 
        {
            margin:10px 0;
            border:solid 1px #333;
            padding:2px 4px;
            font:15px Verdana;
        }
        th {
            font-weight:bold;
        }
    </style>

    <input type="button" onclick="CreateTableFromJSON()" value="Click Here! Table From JSON" />
    <div id="showData"></div>


				</div>
			</section>
		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="flex">
						<div class="copyright">
						</div>
						<ul class="icons">
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">linkedIn</span></a></li>
							<li><a href="#" class="icon fa-pinterest-p"><span class="label">Pinterest</span></a></li>
							<li><a href="#" class="icon fa-vimeo"><span class="label">Vimeo</span></a></li>
						</ul>
					</div>
				</div>
			</footer>
	</body>
</html>
