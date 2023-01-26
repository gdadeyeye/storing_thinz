<!Doctype html>
<html>
<head>
    <style>
    body {
        margin: 0;
      }
      
      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 25%;
        background-color: #f1f1f1;
        position: fixed;
        height: 100%;
        overflow: auto;
      }
      
      li a {
        display: block;
        color: #000;
        padding: 8px 16px;
        text-decoration: none;
      }
      
      li a.active {
        background-color: #8E0E00;
        color: white;
      }
      
      li a:hover:not(.active) {
        background-color: #5558;
        color: white;
      }
      </style>
<!--This is a script that performs a condition statement to see if a value of an option is slected then the otion arry will display list of models-->
<script type="text/javascript">
    function populate(s1,s2){
   var s1 = document.getElementById(s1);
   var s2 = document.getElementById(s2);
   s2.innerHTML ="";
   if(s1.value=="Nissan"){
       var optionArray = ["|","sentra|Sentra","altima|Altima","frontier|Frontier","versa|Versa","gt-r|GT-R","rogue sport|Rogue Sport","rogue|Rogue","kicks|Kicks","maxima|Maxima","murano|Murano","pathfinder|Pathfinder","armada|Armada","titan|Titan","leaf|LEAf","nv passenger|NV Passenger","titan xd|Titan XD","nv200|NV200","nv cargo|NV Cargo","versa note|Versa Note","rogue hybrid|Rogue Hybrid","nv200 taxi|NV200 Taxi"]
   } else if (s1.value == "Toyota"){
       var optionArray =["|","rava|RAVA","camry|Camry","corolla|Corolla","yaris|Yaris","supra|Supra","highlander|Highlander","corolla hatchback|Corolla Hatchback","corolla hybrid|Corolla Hybrid","camry hybrid|Camry Hybrid","prius prime|Prius Prime","mirai|Mirai","yaris sedan|Yaris Sedan","avalon hybrid|Avalon Hybrid","prius c|Prius C"]
   }else if (s1.value=="Chevrolet"){
       var optionArray = ["|","corvette|Corvette","camaro|Camaro","blazer|Blazer","tahoe|Tahoe","equinox|Equinox","silverdo 1500|Silverdo 1500","trax|Trax","malibu|Malibu","colorado|Colorado","suburban|Suburban","silverado 2500hd|Silverado 2500HD","spark|Spark","impala|Impala","cruze|Cruze","sonic|Sonic","silverado 3500hd|Silverado 3500HD","bolt ev|Bolt EV","express|Express","volt|Volt","malibu|Malibu Hybrid","silverado 1500 ld|Silverado 1500 LD"]
   }else if(s1.value=="Dodge"){
       var optionArray=["|","charger|Charger","challenger|Challenger","durango|Durango","grand caravan|Grand Caravan","journey|Journey"]
   }else if(s1.value =="BMW"){
       var optionArray =["|","4 series|4 Series","x6|X6","x5|X5","3 series|3 Series", "x1|X1","m4|M4","z4|Z4","m5|M5","x7|X7","7 series|7 Series","i8|i8","x4|X4","x2|X2","8 series|8 Series","m8|M8","2 series|2 Series","x6 m|X6 M","m2|M2","i3|i3","x5 m|X5 M","x3 phev|X3 PHEV","m240|M240","m6|M6","m8 gran coupe|M8 Gran Coupe","6 series|6 Series","x3 m|X3 M","m850|M850","x4 m|X4 M","m550|M550","m760|M760","m235 gran coupe|M235 Gran Coupe","alpina b6 gran coupe|ALPINA B6 Gran Coupe","m340|M340","m850 gran coupe|M850 Gran Coupe"]
   }else if(s1.value =="Ford"){
       var optionArray =["|","explorer|Explorer","ford mustang|Ford Mustang","ford ranger|Ford Ranger","ford F-150|Ford F-150","ford escape|Ford Esacape","ecosport|EcoSport","edge|Edge","expedition|Expedition","fusion|Fusion","shelby gt500|Shelby GT500","f-250|F-250","ford fiesta|Ford Fiesta","transit connect|Transit Connect","f-350|F-350","f-450|F-450","taurus|Taurus","shelby gt350|Shelby GT350","flex|Flex","transit 250 crew|Transit 250 Crew","fusion hybrid|Fusion Hybrid","expedition max|Expedition Max","transit 150 crew|Transit-150 Crew","fusion enegi|Fusion Energi","transit-150 cargo|Transit-150 Cargo","transit-350 crew|Transit-350 Crew","special service plug-in|Special Service Plug-in","escape|Escape PHEV","transit 250 cargo|Transit 250 Cargo","transit 350 cargo|Transit 350 Cargo"]
   }else if(s1.value =="Honda"){
       var optionArray =["|","civic|Civic","cr-v|CR_V","accord|Accord","hr-v|HR-V","fit|Fit","pilot|Pilot","civic type r|Civic Type R","passport|Passport","odyssey|Odyssey","honda ridgeline|Honda Ridgeline","insight|Insight","cr-v hydrid|CR-V Hybrid","clarity fuel cell|Clarity Fuel Cell","clarity plug-in hybrid|Clarity Plug-in Hybrid","honda clarity electric|Honda Clarity Electric"]
   }else if(s1.value =="Audi"){
       var optionArray =["|","a3|A3","q3|Q3","q5|Q5","q7|Q7","r8|R8","a7|A7","a4|A4","rs 3|RS 3","a6|A6","q8|Q8","tt|TT","a8|A8","s3|S3","s5|S5","s8|S8","sq5|SQ5","s4|S4","sq7|SQ7","s6|S6","e-tron|E-tron","s7|S7","tt rs|TT RS","a6 allroad|A6 Allroad","a4 allroad|A4 Allroad","rs 5|RS 5","sq8|SQ8","rs q8|RS Q8","tts|TTS","q5 e|Q5 E"]
   }else if(s1.value=="Chrysler"){
       var optionArray =["|","300|300","pacifica|Pacifica","voyager|Voyager","pt cruiser|PT Cruiser","crossfire|Crossfire","town and county|Town and County","300c|300C","sebring|Sebring","fifth avenue|Fifth Avenue","200c ev|200C EV","lhs|LHS","windsor|Windsor","lebaron|LeBaron","vision|Vision","airflow|Airflow","aspen|Aspen","cirrus|Cirrus","concorde|Concorde","cordoba|Cordoba","tc by maserati|TC byMaserati","valiant|Valiant","royal|Royal","valiant charger|Valiant Charger","chrysler airstream|Airstream","new yorker|New Yorker","saratoga|Saratoga","horizon|Horizon","imperial|Imperial","300m|300M","newport|Newport","neon|Neon","e-class|E-Class","turbine car|Turbine Car","nassau|Nassau","sigma|Sigma","300 letter series|300 letter Series","royal|Royal","atlantic|Atlantic","300 non-letter series|300 Non-letter Series","180|180","executive|Executive","sunbeam|Sunbeam","300l|300L","tevan|TEVan","java|Java","viper GTs-r|Viper GTS-R","pronto cruizer|Pronto Cruizer","centura|Centura","200|200","drifter|Drifter","|"]
   }else if(s1.value=="Mitsubishi"){
       var optionArray =["|","outlander|Outlander","mirage|Mirage","outlander sport|Outlander Sport","eclipse cross|Eclipse Cross","outlander phev|Outlander PHEV","mirage g4|Mirage G4","mirage|Mirage"]
   }else if(s1.value =="Mercedes Benz"){
       var optionArray=["|","gla-class|GLA-CLASS","g-class|G-Class","s-class|S-Class","glc-class|GLC-Class","e-class|E-Class","gls-class|GLS-Class","glb-class|GLB-Class","c-class|C-Class","a-class|A-Class","cla-class|CLA-Class","sprinter|Sprinter","cls-class|CLS-Class","gle-class|GLE-Class","gt-Class|GT-Class","sl-class|SL-Class","slc-class|SLC-Class","mertris|Mertris"]
   }else if(s1.value =="Alfa Romeo"){
       var optionArray =["|","giulia|Giulia","stelvio| Stelvio","4c spider|4C Spider","gtv|GTV","8c|8C","33 stradale|33 Stradale","147|147","149|149","159|159","4c|4C","brera|Brera","giulietta|Giulietta","gt|GT","milano|Milano","Mito|MiTo","spider|Spider"]
   }else if(s1.value=="Mazda"){
       var optionArray =["|","cx-5|CX-5","mazda3|Mazda3","mazda6|Mazda6","mx-5 miata|Mx-5 Miata","cx-9|CX-9","cx-3|CX-3","cx-30|CX-30","mx-5 miata rf|MX-5 Miata RF"]
   }else if(s1.value=="Subaru"){
       var optionArray =["|","forester|Forester","outback|Outback","crosstrek|Crosstrek","wrx|WRX","ascent|Ascent","legacy|Legacy","brz|BRZ","crosstrek hybrid|Crosstrek Hybrid","sti s209|STI S209"]
   }else if(s1.value=="Volkswagen"){
        var optionArray=["|","tiguan|Tiguan","jetta|Jetta","passat|Passat","golf|Golf","atlas|Atlas","golf gti|Golf GTI","arteron|Arteon","jetta gli|Jetta GLI","beetle|Beetle","golf r|Golf R","atlas cross sport|Atlas Cross Sport","golf alltrack|Golf Alltrack","e-golf|e-Golf","golf sportwagen|Golf SportWagen"]
   }else if(s1.value=="Ferrari"){
       var optionArray=["|","f8 tributo|F8 Tributo","portofino|Portofino","daytona|Daytona","250 GTO|275","599 GTB Fiorano|599 GTB Fiorano","f430|F430","250|250","f40|F40","enzo ferrari|Enzo Ferrari","456 gt|456 GT","288 gto|288 GTO","612 scaglietti|612 Scaglietti","california|California","308 gtb/gts|308 GTB?GTS","575m maranello|575m Maranello","fxx|FXX","458 italia|458 Italia","f355|F355","328|328","550|550","america|America","ferrari testarrossa|Ferrari Testarossa","dino|Dino","330|330","mythos|MYthos","f50|F50","p4/5 by pininfarina|P4/5 by Pininfarina","|"]
   }else if(s1.value=="Hyundai"){
       var optionArray =["|","tucson|Tucson","sonata|Sonata","santa fe|Santa Fe","elantra|Elantra","accent|Accent","kona|Kona","palisade|Palisade","venue|Venue","veloster|Veloster N","loniq hybrid|Ioniq Hybrid","ioniq ev|Ioniq EV","elantra gt|Elantra GT","nexo|NEXO","santa fe xl|Santa Fe XL","ioniq plug-in hybrid|Ioniq plug-in Hybrid"]
   }else if(s1.value=="Maserati"){
       var optionArray=["|","ghibli|Ghibli","levante|Levante","quattroporte|Quattroporte","gran turismo|Gran Turismo","grancabrio|Grancabrio","gt convertible|GT Convertible"]
   }else if(s1.value=="Cadillac"){
       var optionArray=["|","escalade|Escalade","cts|CTS","xt6|XT6","ct6|CT6","xt5|XT5","ats|ATS","xt4|XT4","xts|XTS","ct5|CT5","cts-v|CTS-V","ct4|CT4","escalade esv|Escalade ESV","ats-v|ATS-V","ct6-v|CT6-V"]
   }else if(s1.value=="Aston Martin"){
       var optionArray =["|","vantage|Vantage","db11|DB11","dbs|DBS","vanquish|Vanquish","rapide|Rapide","suv|SUV","DBS Superleggera|DBS Superleggera"]
   }else if(s1.value =="Jarguar"){
       var optionArray =["|","f-pace|F-PACE","f-type|F-TYPE","e-pace|E-PACE","i-pace|I-PACE","xe|XE","xf|XF","xj|XJ","xe sv|XE SV"]
   }else if(s1.value=="Mini"){
       var optionArray=["|","cooper|Cooper","countryman|Countryman","hardtop|Hardtop","clubman|Clubman","cooper s|Cooper S","paceman|Paceman","cooper wiki|Cooper Wiki"]
   }else if(s1.value=="Tesla"){
       var optionArray=["|","model 3|Model 3","model x|Model X","model s|Model S","model y|Model Y"]
   }else if(s1.value=="GMC"){
       var optionArray=["|","acadia|Acadia","terrain|Terrain","yukon|Yukon","sierra 1500|Sierra 1500","canyon|Canyon","sierra 2500hd|Sierra 2500HD","yukon XL|Yukon XL","sierra 3500hd|Sierra 3500HD","savana|Savana","sierra 1500 limited|Sierra 1500 Limited"]
   }else if(s1.value=="Jeep"){
       var optionArray=["|","wrangler|Wrangler","grand|Grand","renegade|Renegade","compass|Compass","gladiator|Gladiator","cherokee|Cherokee"]
   }
   for (var option in optionArray){
       var pair = optionArray[option].split("|");
       var newOption = document.createElement("option");
       newOption.value = pair[0];
       newOption.innerHTML =pair[1];
       s2.options.add(newOption);
      

   }
}

</script>
</head>

<body>
    <ul>
        <li><a class="active" href="">ABOUT</a></li>
        <li><a href="">CAR SALES</a></li>
        <li><a href="Service.html">SERVICES</a></li>
        <li><a href="Auto_Parts.html">AUTO PARTS</a></li>
        <li><a href="Contact_Form.html">CONTACT MECHANIC</a></li>
    </ul>

<div style="margin-left:20%;padding:2px 16px;height:1000px;margin-top: 0%;">
    <h2 style="margin-left:250px;color: rgb(6, 71, 55);">We work on all Make and Models of Cars</h2>
    <table align="center">
        <tr>
            <td>
                <form action="/action_page.php" method="get">
                    <label for="vehicles">Select Car:</label>
                    <select id="vehicles" name="myvehicles" onchange="populate(this.id,'models')">
                        <option value=""></option>
                        <option value="Nissan">Nissan</option>
                        <option value="Toyota">Toyota</option>
                        <option value="Chevrolet">Chevrolet</option>
                        <option value="Dodge">Dodge</option>
                        <option value="BMW">BMW</option>
                        <option value="Ford">Ford</option>
                        <option value="Honda">Honda</option>
                        <option value="Audi">Audi</option>
                        <option value="Chrysler">Chrysler</option>
                        <option value="Mitsubishi">Mitsubishi</option>
                        <option value="Mercedes Benz">Mercedes Benz</option>
                        <option value="Alfa Romeo">Alfa Romeo</option>
                        <option value="Mazda">Mazda</option>
                        <option value="Subaru">Subaru</option>
                        <option value="Volkswagen">Volkswagen</option>
                        <option value="Ferrari">Ferrari</option>
                        <option value="Hyundai">Hyundai</option>
                        <option value="Maserati">Maserati</option>
                        <option value="Cadillac">Cadillac</option>
                        <option value="Aston Martin">Aston Martin</option>
                        <option value="Jarguar">Jarguar</option>
                        <option value="Mini">Mini</option>
                        <option value="Tesla">Tesla</option>
                        <option id="GMC">GMC</option>
                        <option id="Jeep">Jeep</option>   
                    </select>

                    <label for="vehicles">Select Model:</label>
                        <select id="models" name="mymodel"></select>
                           
                                            
                    <label for="vehicles">Select Year:</label>
                        <select id="year">
                            <optgroup label="2020s">
                                <option>2021</option>
                                <option>2020</option>   
                            </optgroup>

                            <optgroup label="2010s">
                                <option>2019</option>
                                <option>2018</option>
                                <option>2017</option>
                                <option>2016</option>
                                <option>2015</option>
                                <option>2014</option>
                                <option>2013</option>
                                <option>2012</option>
                                <option>2011</option>
                                <option>2010</option>
                            </optgroup>

                            <optgroup label="2000s">
                                <option>2009</option>
                                <option>2008</option>
                                <option>2007</option>
                                <option>2006</option>
                                <option>2005</option>
                                <option>2004</option>
                                <option>2003</option>
                                <option>2002</option>
                                <option>2001</option>
                                <option>2000</option>
                            <optgroup>

                            <optgroup label ="1990s">
                                <option>1999</option>
                                <option>1998</option>
                                <option>1997</option>
                                <option>1996</option>
                                <option>1995</option>
                                <option>1994</option>
                                <option>1993</option>
                                <option>1992</option>
                                <option>1991</option>
                                <option>1990</option>
                            <optgroup>

                            <optgroup label="1980s">
                                <option>1989</option>
                                <option>1988</option>
                                <option>1887</option>
                                <option>1986</option>
                                <option>1985</option>
                                <option>1984</option>
                                <option>1983</option>
                                <option>1982</option>
                                <option>1981</option>
                                <option>1980</option>
                            <optgroup>

                            <optgroup label="1970s">
                                <option>1979</option>
                                <option>1978</option>
                                <option>1977</option>
                                <option>1976</option>
                                <option>1975</option>
                                <option>1974</option>
                                <option>1973</option>
                                <option>1972</option>
                                <option>1971</option>
                                <option>1970</option>
                            </optgroup>

                            <optgroup label="1960s">
                                <option>1969</option>
                                <option>1968</option>
                                <option>1967</option>
                            </optgroup>
                    </select>

                    <br></br><br></br>
                    <h3 style="color: rgb(6, 71, 55);">What is the problem of Your Vehicle?</h3>
                    <tr>
                        <td>
                            <p>Interior Parts</p>
                            <select id="services">
                                <label for="services">Select Problem:</label>
                                <option></option>
                                <option>Engine Repair</option>
                                <option>Electrical system Repair</option>
                                <option>Hybrid Battery installation</option>
                                <option>Transmission</option>
                                <option>Factory scheduled services</option>
                            </select>       
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <p>Exterior Parts</p>
                            <select id="services">
                                <label for="services">Select Problem:</label>
                                <option></option>
                                <option>Bumper</option>
                                <option>Bumper End</option>
                                <option>Valance Panel</option>
                                <option>Inner Fender</option>
                                <option>Fender</option>
                                <option>Cowl Panel</option>
                                <option>Door</option>
                                <option>Lower Door Skin</option>
                                <option>Rocker Panel</option>
                                <option>Dog Leg</option>
                                <option>Wheel Arch Panel</option>
                                <option>WheelHouse</option>
                                <option>Quater Panel</option>
                                <option>Fender Extension Panel</option>
                                <option>Header Panel</option>
                                <option>Hood</option>
                                <option>Firewall</option>
                                <option>Fender Flare</option>
                                <option>Truck/Deck lids</option>
                            <p>PRINT REPORT SERVICE</p>
                                <button onclick="window.print()">Print</button>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="submit" value="Submit"></td> 
                        <td><a href="Login_screen   .php">Login</a></td>
                    </tr>
                </form>          
    </table>  
</div>

</body>

</html>