<?php $data = $_POST; ?>
<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>HOTEL SHOW COLOMBO 2025</title>
    <!--<title>Registration Form in HTML CSS</title>-->
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo2025.png">

    <!-- Icons -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" /> -->
    
    <!---Custom CSS File--->
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
    
  </head>
  <body style="background: #0880b285; background-image: url(img/backg.jpg); background-position: center; background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
    
    <section class="container" style="--bs-gutter-x: 3.8rem; background-color: #ffffffe8; max-width:900px">
    <div class="agile-voltsub">
        <img src="img/logo2025.png" style="width: 300px" alt="HSC 2025"><br><br>
        <h2>EXHIBITOR REGISTRATION FORM</h2>
    </div><br>

      <form action="insert.php" class="form" method="post" enctype="multipart/form-data">
        
      <div class="column">
          <div class="input-box">
            <label>Contact Person <span style="color: red;">*</span></label>
            <div class="column">
              <div class="select-box" style="width: 30%;">
                <select name="title" required>
                  <option value="" hidden>Title</option>
                  <option value="Mr.">Mr.</option>
                  <option value="Ms.">Ms.</option>
                  <option value="Mrs.">Mrs.</option>
                  <option value="Other">Other</option>
                </select>
              </div>
              <input type="text" name="firstName" placeholder="First name" required/>
              <input type="text" name="lastName" placeholder="Last name" required />
            </div>
          </div>
        </div>

        <!-- <div class="column">
          <div class="input-box">
            <label>First Name <span style="color: red;">*</span></label>
            <div class="column">
            <input type="text" name="fName" placeholder="Enter First Name" required/>
            </div>
          </div>
          <div class="input-box">
            <label>Last Name <span style="color: red;">*</span></label>
            <div class="column">
            <input type="text" name="lName" placeholder="Enter Last Name" required/>
            </div>
          </div>
        </div> -->

        <div class="column">
          <div class="input-box">
            <label>Contact Number <span style="color: red;">*</span></label>
            <div class="column">
              <div class="select-box" style="width: 60%;">
                <select name="conExt">
                  <option hidden>C. Code</option>
                    <option data-countryCode="DZ" value="00213">Algeria (+213)</option>
                    <option data-countryCode="AD" value="00376">Andorra (+376)</option>
                    <option data-countryCode="AO" value="00244">Angola (+244)</option>
                    <option data-countryCode="AI" value="001264">Anguilla (+1264)</option>
                    <option data-countryCode="AG" value="001268">Antigua &amp; Barbuda (+1268)</option>
                    <option data-countryCode="AR" value="0054">Argentina (+54)</option>
                    <option data-countryCode="AM" value="00374">Armenia (+374)</option>
                    <option data-countryCode="AW" value="00297">Aruba (+297)</option>
                    <option data-countryCode="AU" value="0061">Australia (+61)</option>
                    <option data-countryCode="AT" value="0043">Austria (+43)</option>
                    <option data-countryCode="AZ" value="00994">Azerbaijan (+994)</option>
                    <option data-countryCode="BS" value="001242">Bahamas (+1242)</option>
                    <option data-countryCode="BH" value="00973">Bahrain (+973)</option>
                    <option data-countryCode="BD" value="00880">Bangladesh (+880)</option>
                    <option data-countryCode="BB" value="001246">Barbados (+1246)</option>
                    <option data-countryCode="BY" value="00375">Belarus (+375)</option>
                    <option data-countryCode="BE" value="0032">Belgium (+32)</option>
                    <option data-countryCode="BZ" value="00501">Belize (+501)</option>
                    <option data-countryCode="BJ" value="00229">Benin (+229)</option>
                    <option data-countryCode="BM" value="001441">Bermuda (+1441)</option>
                    <option data-countryCode="BT" value="00975">Bhutan (+975)</option>
                    <option data-countryCode="BO" value="00591">Bolivia (+591)</option>
                    <option data-countryCode="BA" value="00387">Bosnia Herzegovina (+387)</option>
                    <option data-countryCode="BW" value="00267">Botswana (+267)</option>
                    <option data-countryCode="BR" value="0055">Brazil (+55)</option>
                    <option data-countryCode="BN" value="00673">Brunei (+673)</option>
                    <option data-countryCode="BG" value="00359">Bulgaria (+359)</option>
                    <option data-countryCode="BF" value="00226">Burkina Faso (+226)</option>
                    <option data-countryCode="BI" value="00257">Burundi (+257)</option>
                    <option data-countryCode="KH" value="00855">Cambodia (+855)</option>
                    <option data-countryCode="CM" value="00237">Cameroon (+237)</option>
                    <option data-countryCode="CA" value="001">Canada (+1)</option>
                    <option data-countryCode="CV" value="00238">Cape Verde Islands (+238)</option>
                    <option data-countryCode="KY" value="001345">Cayman Islands (+1345)</option>
                    <option data-countryCode="CF" value="00236">Central African Republic (+236)</option>
                    <option data-countryCode="CL" value="0056">Chile (+56)</option>
                    <option data-countryCode="CN" value="0086">China (+86)</option>
                    <option data-countryCode="CO" value="0057">Colombia (+57)</option>
                    <option data-countryCode="KM" value="00269">Comoros (+269)</option>
                    <option data-countryCode="CG" value="00242">Congo (+242)</option>
                    <option data-countryCode="CK" value="00682">Cook Islands (+682)</option>
                    <option data-countryCode="CR" value="00506">Costa Rica (+506)</option>
                    <option data-countryCode="HR" value="00385">Croatia (+385)</option>
                    <option data-countryCode="CU" value="0053">Cuba (+53)</option>
                    <option data-countryCode="CY" value="0090392">Cyprus North (+90392)</option>
                    <option data-countryCode="CY" value="00357">Cyprus South (+357)</option>
                    <option data-countryCode="CZ" value="0042">Czech Republic (+42)</option>
                    <option data-countryCode="DK" value="0045">Denmark (+45)</option>
                    <option data-countryCode="DJ" value="00253">Djibouti (+253)</option>
                    <option data-countryCode="DM" value="001809">Dominica (+1809)</option>
                    <option data-countryCode="DO" value="001809">Dominican Republic (+1809)</option>
                    <option data-countryCode="EC" value="00593">Ecuador (+593)</option>
                    <option data-countryCode="EG" value="0020">Egypt (+20)</option>
                    <option data-countryCode="SV" value="00503">El Salvador (+503)</option>
                    <option data-countryCode="GQ" value="00240">Equatorial Guinea (+240)</option>
                    <option data-countryCode="ER" value="00291">Eritrea (+291)</option>
                    <option data-countryCode="EE" value="00372">Estonia (+372)</option>
                    <option data-countryCode="ET" value="00251">Ethiopia (+251)</option>
                    <option data-countryCode="FK" value="00500">Falkland Islands (+500)</option>
                    <option data-countryCode="FO" value="00298">Faroe Islands (+298)</option>
                    <option data-countryCode="FJ" value="00679">Fiji (+679)</option>
                    <option data-countryCode="FI" value="00358">Finland (+358)</option>
                    <option data-countryCode="FR" value="0033">France (+33)</option>
                    <option data-countryCode="GF" value="00594">French Guiana (+594)</option>
                    <option data-countryCode="PF" value="00689">French Polynesia (+689)</option>
                    <option data-countryCode="GA" value="00241">Gabon (+241)</option>
                    <option data-countryCode="GM" value="00220">Gambia (+220)</option>
                    <option data-countryCode="GE" value="007880">Georgia (+7880)</option>
                    <option data-countryCode="DE" value="0049">Germany (+49)</option>
                    <option data-countryCode="GH" value="00233">Ghana (+233)</option>
                    <option data-countryCode="GI" value="00350">Gibraltar (+350)</option>
                    <option data-countryCode="GR" value="0030">Greece (+30)</option>
                    <option data-countryCode="GL" value="00299">Greenland (+299)</option>
                    <option data-countryCode="GD" value="001473">Grenada (+1473)</option>
                    <option data-countryCode="GP" value="00590">Guadeloupe (+590)</option>
                    <option data-countryCode="GU" value="00671">Guam (+671)</option>
                    <option data-countryCode="GT" value="00502">Guatemala (+502)</option>
                    <option data-countryCode="GN" value="00224">Guinea (+224)</option>
                    <option data-countryCode="GW" value="00245">Guinea - Bissau (+245)</option>
                    <option data-countryCode="GY" value="00592">Guyana (+592)</option>
                    <option data-countryCode="HT" value="00509">Haiti (+509)</option>
                    <option data-countryCode="HN" value="00504">Honduras (+504)</option>
                    <option data-countryCode="HK" value="00852">Hong Kong (+852)</option>
                    <option data-countryCode="HU" value="0036">Hungary (+36)</option>
                    <option data-countryCode="IS" value="00354">Iceland (+354)</option>
                    <option data-countryCode="IN" value="0091">India (+91)</option>
                    <option data-countryCode="ID" value="0062">Indonesia (+62)</option>
                    <option data-countryCode="IR" value="0098">Iran (+98)</option>
                    <option data-countryCode="IQ" value="00964">Iraq (+964)</option>
                    <option data-countryCode="IE" value="00353">Ireland (+353)</option>
                    <option data-countryCode="IL" value="00972">Israel (+972)</option>
                    <option data-countryCode="IT" value="0039">Italy (+39)</option>
                    <option data-countryCode="JM" value="001876">Jamaica (+1876)</option>
                    <option data-countryCode="JP" value="0081">Japan (+81)</option>
                    <option data-countryCode="JO" value="00962">Jordan (+962)</option>
                    <option data-countryCode="KZ" value="007">Kazakhstan (+7)</option>
                    <option data-countryCode="KE" value="00254">Kenya (+254)</option>
                    <option data-countryCode="KI" value="00686">Kiribati (+686)</option>
                    <option data-countryCode="KP" value="00850">Korea North (+850)</option>
                    <option data-countryCode="KR" value="0082">Korea South (+82)</option>
                    <option data-countryCode="KW" value="00965">Kuwait (+965)</option>
                    <option data-countryCode="KG" value="00996">Kyrgyzstan (+996)</option>
                    <option data-countryCode="LA" value="00856">Laos (+856)</option>
                    <option data-countryCode="LV" value="00371">Latvia (+371)</option>
                    <option data-countryCode="LB" value="00961">Lebanon (+961)</option>
                    <option data-countryCode="LS" value="00266">Lesotho (+266)</option>
                    <option data-countryCode="LR" value="00231">Liberia (+231)</option>
                    <option data-countryCode="LY" value="00218">Libya (+218)</option>
                    <option data-countryCode="LI" value="00417">Liechtenstein (+417)</option>
                    <option data-countryCode="LT" value="00370">Lithuania (+370)</option>
                    <option data-countryCode="LU" value="00352">Luxembourg (+352)</option>
                    <option data-countryCode="MO" value="00853">Macao (+853)</option>
                    <option data-countryCode="MK" value="00389">Macedonia (+389)</option>
                    <option data-countryCode="MG" value="00261">Madagascar (+261)</option>
                    <option data-countryCode="MW" value="00265">Malawi (+265)</option>
                    <option data-countryCode="MY" value="0060">Malaysia (+60)</option>
                    <option data-countryCode="MV" value="00960">Maldives (+960)</option>
                    <option data-countryCode="ML" value="00223">Mali (+223)</option>
                    <option data-countryCode="MT" value="00356">Malta (+356)</option>
                    <option data-countryCode="MH" value="00692">Marshall Islands (+692)</option>
                    <option data-countryCode="MQ" value="00596">Martinique (+596)</option>
                    <option data-countryCode="MR" value="00222">Mauritania (+222)</option>
                    <option data-countryCode="YT" value="00269">Mayotte (+269)</option>
                    <option data-countryCode="MX" value="0052">Mexico (+52)</option>
                    <option data-countryCode="FM" value="00691">Micronesia (+691)</option>
                    <option data-countryCode="MD" value="00373">Moldova (+373)</option>
                    <option data-countryCode="MC" value="00377">Monaco (+377)</option>
                    <option data-countryCode="MN" value="00976">Mongolia (+976)</option>
                    <option data-countryCode="MS" value="001664">Montserrat (+1664)</option>
                    <option data-countryCode="MA" value="00212">Morocco (+212)</option>
                    <option data-countryCode="MZ" value="00258">Mozambique (+258)</option>
                    <option data-countryCode="MN" value="0095">Myanmar (+95)</option>
                    <option data-countryCode="NA" value="00264">Namibia (+264)</option>
                    <option data-countryCode="NR" value="00674">Nauru (+674)</option>
                    <option data-countryCode="NP" value="00977">Nepal (+977)</option>
                    <option data-countryCode="NL" value="0031">Netherlands (+31)</option>
                    <option data-countryCode="NC" value="00687">New Caledonia (+687)</option>
                    <option data-countryCode="NZ" value="0064">New Zealand (+64)</option>
                    <option data-countryCode="NI" value="00505">Nicaragua (+505)</option>
                    <option data-countryCode="NE" value="00227">Niger (+227)</option>
                    <option data-countryCode="NG" value="00234">Nigeria (+234)</option>
                    <option data-countryCode="NU" value="00683">Niue (+683)</option>
                    <option data-countryCode="NF" value="00672">Norfolk Islands (+672)</option>
                    <option data-countryCode="NP" value="00670">Northern Marianas (+670)</option>
                    <option data-countryCode="NO" value="0047">Norway (+47)</option>
                    <option data-countryCode="OM" value="00968">Oman (+968)</option>
                    <option data-countryCode="PW" value="00680">Palau (+680)</option>
                    <option data-countryCode="PA" value="00507">Panama (+507)</option>
                    <option data-countryCode="PG" value="00675">Papua New Guinea (+675)</option>
                    <option data-countryCode="PY" value="00595">Paraguay (+595)</option>
                    <option data-countryCode="PE" value="0051">Peru (+51)</option>
                    <option data-countryCode="PH" value="0063">Philippines (+63)</option>
                    <option data-countryCode="PL" value="0048">Poland (+48)</option>
                    <option data-countryCode="PT" value="00351">Portugal (+351)</option>
                    <option data-countryCode="PR" value="001787">Puerto Rico (+1787)</option>
                    <option data-countryCode="QA" value="00974">Qatar (+974)</option>
                    <option data-countryCode="RE" value="00262">Reunion (+262)</option>
                    <option data-countryCode="RO" value="0040">Romania (+40)</option>
                    <option data-countryCode="RU" value="007">Russia (+7)</option>
                    <option data-countryCode="RW" value="00250">Rwanda (+250)</option>
                    <option data-countryCode="SM" value="00378">San Marino (+378)</option>
                    <option data-countryCode="ST" value="00239">Sao Tome &amp; Principe (+239)</option>
                    <option data-countryCode="SA" value="00966">Saudi Arabia (+966)</option>
                    <option data-countryCode="SN" value="00221">Senegal (+221)</option>
                    <option data-countryCode="CS" value="00381">Serbia (+381)</option>
                    <option data-countryCode="SC" value="00248">Seychelles (+248)</option>
                    <option data-countryCode="SL" value="00232">Sierra Leone (+232)</option>
                    <option data-countryCode="SG" value="0065">Singapore (+65)</option>
                    <option data-countryCode="SK" value="00421">Slovak Republic (+421)</option>
                    <option data-countryCode="SI" value="00386">Slovenia (+386)</option>
                    <option data-countryCode="SB" value="00677">Solomon Islands (+677)</option>
                    <option data-countryCode="SO" value="00252">Somalia (+252)</option>
                    <option data-countryCode="ZA" value="0027">South Africa (+27)</option>
                    <option data-countryCode="ES" value="0034">Spain (+34)</option>
                    <option data-countryCode="LK" value="0094">Sri Lanka (+94)</option>
                    <option data-countryCode="SH" value="00290">St. Helena (+290)</option>
                    <option data-countryCode="KN" value="001869">St. Kitts (+1869)</option>
                    <option data-countryCode="SC" value="001758">St. Lucia (+1758)</option>
                    <option data-countryCode="SD" value="00249">Sudan (+249)</option>
                    <option data-countryCode="SR" value="00597">Suriname (+597)</option>
                    <option data-countryCode="SZ" value="00268">Swaziland (+268)</option>
                    <option data-countryCode="SE" value="0046">Sweden (+46)</option>
                    <option data-countryCode="CH" value="0041">Switzerland (+41)</option>
                    <option data-countryCode="SI" value="00963">Syria (+963)</option>
                    <option data-countryCode="TW" value="00886">Taiwan (+886)</option>
                    <option data-countryCode="TJ" value="007">Tajikstan (+7)</option>
                    <option data-countryCode="TH" value="0066">Thailand (+66)</option>
                    <option data-countryCode="TG" value="00228">Togo (+228)</option>
                    <option data-countryCode="TO" value="00676">Tonga (+676)</option>
                    <option data-countryCode="TT" value="001868">Trinidad &amp; Tobago (+1868)</option>
                    <option data-countryCode="TN" value="00216">Tunisia (+216)</option>
                    <option data-countryCode="TR" value="0090">Turkey (+90)</option>
                    <option data-countryCode="TM" value="007">Turkmenistan (+7)</option>
                    <option data-countryCode="TM" value="00993">Turkmenistan (+993)</option>
                    <option data-countryCode="TC" value="001649">Turks &amp; Caicos Islands (+1649)</option>
                    <option data-countryCode="TV" value="00688">Tuvalu (+688)</option>
                    <option data-countryCode="UG" value="00256">Uganda (+256)</option>
                    <option data-countryCode="GB" value="0044">UK (+44)</option>
                    <option data-countryCode="UA" value="00380">Ukraine (+380)</option>
                    <option data-countryCode="AE" value="00971">United Arab Emirates (+971)</option>
                    <option data-countryCode="UY" value="00598">Uruguay (+598)</option>
                    <option data-countryCode="US" value="001">USA (+1)</option>
                    <option data-countryCode="UZ" value="007">Uzbekistan (+7)</option>
                    <option data-countryCode="VU" value="00678">Vanuatu (+678)</option>
                    <option data-countryCode="VA" value="00379">Vatican City (+379)</option>
                    <option data-countryCode="VE" value="0058">Venezuela (+58)</option>
                    <option data-countryCode="VN" value="0084">Vietnam (+84)</option>
                    <option data-countryCode="VG" value="0084">Virgin Islands - British (+1284)</option>
                    <option data-countryCode="VI" value="0084">Virgin Islands - US (+1340)</option>
                    <option data-countryCode="WF" value="00681">Wallis &amp; Futuna (+681)</option>
                    <option data-countryCode="YE" value="00969">Yemen (North)(+969)</option>
                    <option data-countryCode="YE" value="00967">Yemen (South)(+967)</option>
                    <option data-countryCode="ZM" value="00260">Zambia (+260)</option>
                    <option data-countryCode="ZW" value="00263">Zimbabwe (+263)</option>
                </select>
              </div>
              <input type="text" name="conNum" placeholder="Contact number" required />
            </div>
          </div>
          <div class="input-box">
            <label>Company Name <span style="color: red;">*</span></label>
            <div class="column">
              <input type="text" name="comapanyName" placeholder="Company name" required />
            </div>
          </div>
        </div>

        <div class="column">
          <div class="input-box">
            <label>Job Title <span style="color: red;">*</span></label>
            <input type="text" name="jobTitle" placeholder="Job title" required />
          </div>
          <div class="input-box">
            <label>Email Address <span style="color: red;">*</span></label>
            <input type="email" name="email" placeholder="Email address" required/>
          </div>
          <div class="input-box">
            <label>Country <span style="color: red;">*</span></label>
            <div class="column">
              <div class="select-box">
                <select name="country" required>
                  <option value="" hidden>Select Country</option>
                  <option value="Afghanistan">Afghanistan</option>
                  <option value="Aland Islands">Aland Islands</option>
                  <option value="Albania">Albania</option>
                  <option value="Algeria">Algeria</option>
                  <option value="American Samoa">American Samoa</option>
                  <option value="Andorra">Andorra</option>
                  <option value="Angola">Angola</option>
                  <option value="Anguilla">Anguilla</option>
                  <option value="Antarctica">Antarctica</option>
                  <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                  <option value="Argentina">Argentina</option>
                  <option value="Armenia">Armenia</option>
                  <option value="Aruba">Aruba</option>
                  <option value="Australia">Australia</option>
                  <option value="Austria">Austria</option>
                  <option value="Azerbaijan">Azerbaijan</option>
                  <option value="Bahamas">Bahamas</option>
                  <option value="Bahrain">Bahrain</option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="Barbados">Barbados</option>
                  <option value="Belarus">Belarus</option>
                  <option value="Belgium">Belgium</option>
                  <option value="Belize">Belize</option>
                  <option value="Benin">Benin</option>
                  <option value="Bermuda">Bermuda</option>
                  <option value="Bhutan">Bhutan</option>
                  <option value="Bolivia">Bolivia</option>
                  <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                  <option value="Botswana">Botswana</option>
                  <option value="Bouvet Island">Bouvet Island</option>
                  <option value="Brazil">Brazil</option>
                  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                  <option value="Brunei Darussalam">Brunei Darussalam</option>
                  <option value="Bulgaria">Bulgaria</option>
                  <option value="Burkina Faso">Burkina Faso</option>
                  <option value="Burundi">Burundi</option>
                  <option value="Cambodia">Cambodia</option>
                  <option value="Cameroon">Cameroon</option>
                  <option value="Canada">Canada</option>
                  <option value="Cape Verde">Cape Verde</option>
                  <option value="Cayman Islands">Cayman Islands</option>
                  <option value="Central African Republic">Central African Republic</option>
                  <option value="Chad">Chad</option>
                  <option value="Chile">Chile</option>
                  <option value="China">China</option>
                  <option value="Christmas Island">Christmas Island</option>
                  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                  <option value="Colombia">Colombia</option>
                  <option value="Comoros">Comoros</option>
                  <option value="Congo">Congo</option>
                  <option value="Congo, Democratic Republic of the Congo">Congo, Democratic Republic of the Congo</option>
                  <option value="Cook Islands">Cook Islands</option>
                  <option value="Costa Rica">Costa Rica</option>
                  <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                  <option value="Croatia">Croatia</option>
                  <option value="Cuba">Cuba</option>
                  <option value="Curacao">Curacao</option>
                  <option value="CCyprusY">Cyprus</option>
                  <option value="Czech Republic">Czech Republic</option>
                  <option value="Denmark">Denmark</option>
                  <option value="Djibouti">Djibouti</option>
                  <option value="Dominica">Dominica</option>
                  <option value="Dominican Republic">Dominican Republic</option>
                  <option value="Ecuador">Ecuador</option>
                  <option value="Egypt">Egypt</option>
                  <option value="El Salvador">El Salvador</option>
                  <option value="Equatorial Guinea">Equatorial Guinea</option>
                  <option value="Eritrea">Eritrea</option>
                  <option value="Estonia">Estonia</option>
                  <option value="Ethiopia">Ethiopia</option>
                  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                  <option value="Faroe Islands">Faroe Islands</option>
                  <option value="Fiji">Fiji</option>
                  <option value="Finland">Finland</option>
                  <option value="France">France</option>
                  <option value="French Guiana">French Guiana</option>
                  <option value="French Polynesia">French Polynesia</option>
                  <option value="French Southern Territories">French Southern Territories</option>
                  <option value="Gabon">Gabon</option>
                  <option value="Gambia">Gambia</option>
                  <option value="Georgia">Georgia</option>
                  <option value="Germany">Germany</option>
                  <option value="Ghana">Ghana</option>
                  <option value="Gibraltar">Gibraltar</option>
                  <option value="Greece">Greece</option>
                  <option value="Greenland">Greenland</option>
                  <option value="Grenada">Grenada</option>
                  <option value="Guadeloupe">Guadeloupe</option>
                  <option value="Guam">Guam</option>
                  <option value="Guatemala">Guatemala</option>
                  <option value="Guernsey">Guernsey</option>
                  <option value="Guinea">Guinea</option>
                  <option value="Guinea-Bissau">Guinea-Bissau</option>
                  <option value="Guyana">Guyana</option>
                  <option value="Haiti">Haiti</option>
                  <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                  <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                  <option value="Honduras">Honduras</option>
                  <option value="Hong Kong">Hong Kong</option>
                  <option value="Hungary">Hungary</option>
                  <option value="Iceland">Iceland</option>
                  <option value="India">India</option>
                  <option value="Indonesia">Indonesia</option>
                  <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                  <option value="Iraq">Iraq</option>
                  <option value="Ireland">Ireland</option>
                  <option value="Isle of Man">Isle of Man</option>
                  <option value="Israel">Israel</option>
                  <option value="Italy">Italy</option>
                  <option value="Jamaica">Jamaica</option>
                  <option value="Japan">Japan</option>
                  <option value="Jersey">Jersey</option>
                  <option value="Jordan">Jordan</option>
                  <option value="Kazakhstan">Kazakhstan</option>
                  <option value="Kenya">Kenya</option>
                  <option value="Kiribati">Kiribati</option>
                  <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                  <option value="Korea, Republic of">Korea, Republic of</option>
                  <option value="Kosovo">Kosovo</option>
                  <option value="Kuwait">Kuwait</option>
                  <option value="Kyrgyzstan">Kyrgyzstan</option>
                  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                  <option value="Latvia">Latvia</option>
                  <option value="Lebanon">Lebanon</option>
                  <option value="Lesotho">Lesotho</option>
                  <option value="Liberia">Liberia</option>
                  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                  <option value="Liechtenstein">Liechtenstein</option>
                  <option value="Lithuania">Lithuania</option>
                  <option value="Luxembourg">Luxembourg</option>
                  <option value="Macao">Macao</option>
                  <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of</option>
                  <option value="Madagascar">Madagascar</option>
                  <option value="Malawi">Malawi</option>
                  <option value="Malaysia">Malaysia</option>
                  <option value="Maldives">Maldives</option>
                  <option value="Mali">Mali</option>
                  <option value="Malta">Malta</option>
                  <option value="Marshall Islands">Marshall Islands</option>
                  <option value="Martinique">Martinique</option>
                  <option value="Mauritania">Mauritania</option>
                  <option value="Mauritius">Mauritius</option>
                  <option value="Mayotte">Mayotte</option>
                  <option value="Mexico">Mexico</option>
                  <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                  <option value="Moldova, Republic of">Moldova, Republic of</option>
                  <option value="Monaco">Monaco</option>
                  <option value="Mongolia">Mongolia</option>
                  <option value="Montenegro">Montenegro</option>
                  <option value="Montserrat">Montserrat</option>
                  <option value="Morocco">Morocco</option>
                  <option value="Mozambique">Mozambique</option>
                  <option value="Myanmar">Myanmar</option>
                  <option value="Namibia">Namibia</option>
                  <option value="Nauru">Nauru</option>
                  <option value="Nepal">Nepal</option>
                  <option value="Netherlands">Netherlands</option>
                  <option value="Netherlands Antilles">Netherlands Antilles</option>
                  <option value="New Caledonia">New Caledonia</option>
                  <option value="New Zealand">New Zealand</option>
                  <option value="Nicaragua">Nicaragua</option>
                  <option value="Niger">Niger</option>
                  <option value="Nigeria">Nigeria</option>
                  <option value="Niue">Niue</option>
                  <option value="Norfolk Island">Norfolk Island</option>
                  <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                  <option value="Norway">Norway</option>
                  <option value="Oman">Oman</option>
                  <option value="Pakistan">Pakistan</option>
                  <option value="Palau">Palau</option>
                  <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                  <option value="Panama">Panama</option>
                  <option value="Papua New Guinea">Papua New Guinea</option>
                  <option value="Paraguay">Paraguay</option>
                  <option value="Peru">Peru</option>
                  <option value="Philippines">Philippines</option>
                  <option value="Pitcairn">Pitcairn</option>
                  <option value="Poland">Poland</option>
                  <option value="Portugal">Portugal</option>
                  <option value="Puerto Rico">Puerto Rico</option>
                  <option value="Qatar">Qatar</option>
                  <option value="Reunion">Reunion</option>
                  <option value="Romania">Romania</option>
                  <option value="Russian Federation">Russian Federation</option>
                  <option value="Rwanda">Rwanda</option>
                  <option value="Saint Barthelemy">Saint Barthelemy</option>
                  <option value="Saint Helena">Saint Helena</option>
                  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                  <option value="Saint Lucia">Saint Lucia</option>
                  <option value="Saint Martin">Saint Martin</option>
                  <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                  <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                  <option value="Samoa">Samoa</option>
                  <option value="San Marino">San Marino</option>
                  <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                  <option value="Saudi Arabia">Saudi Arabia</option>
                  <option value="Senegal">Senegal</option>
                  <option value="Serbia">Serbia</option>
                  <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                  <option value="Seychelles">Seychelles</option>
                  <option value="Sierra Leone">Sierra Leone</option>
                  <option value="Singapore">Singapore</option>
                  <option value="Sint Maarten">Sint Maarten</option>
                  <option value="Slovakia">Slovakia</option>
                  <option value="Slovenia">Slovenia</option>
                  <option value="Solomon Islands">Solomon Islands</option>
                  <option value="Somalia">Somalia</option>
                  <option value="South Africa">South Africa</option>
                  <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                  <option value="South Sudan">South Sudan</option>
                  <option value="Spain">Spain</option>
                  <option value="Sri Lanka">Sri Lanka</option>
                  <option value="Sudan">Sudan</option>
                  <option value="Suriname">Suriname</option>
                  <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                  <option value="Swaziland">Swaziland</option>
                  <option value="Sweden">Sweden</option>
                  <option value="Switzerland">Switzerland</option>
                  <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                  <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                  <option value="Tajikistan">Tajikistan</option>
                  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                  <option value="Thailand">Thailand</option>
                  <option value="Timor-Leste">Timor-Leste</option>
                  <option value="Togo">Togo</option>
                  <option value="Tokelau">Tokelau</option>
                  <option value="Tonga">Tonga</option>
                  <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                  <option value="Tunisia">Tunisia</option>
                  <option value="Turkey">Turkey</option>
                  <option value="Turkmenistan">Turkmenistan</option>
                  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                  <option value="Tuvalu">Tuvalu</option>
                  <option value="Uganda">Uganda</option>
                  <option value="Ukraine">Ukraine</option>
                  <option value="United Arab Emirates">United Arab Emirates</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="United States">United States</option>
                  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                  <option value="Uruguay">Uruguay</option>
                  <option value="Uzbekistan">Uzbekistan</option>
                  <option value="Vanuatu">Vanuatu</option>
                  <option value="Venezuela">Venezuela</option>
                  <option value="Viet Nam">Viet Nam</option>
                  <option value="Virgin Islands, British">Virgin Islands, British</option>
                  <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
                  <option value="Wallis and Futuna">Wallis and Futuna</option>
                  <option value="Western Sahara">Western Sahara</option>
                  <option value="Yemen">Yemen</option>
                  <option value="Zambia">Zambia</option>
                  <option value="Zimbabwe">Zimbabwe</option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="input-box">
              <label for="remark" class="form-label">Remark</label>
              <textarea class="form-control" name="remark" rows="3"></textarea>
          </div>
        </div>

      <div class="gender-box">

        <button type="submit" onclick="submitForm('insert.php')">Submit</button>
        <br><br>

        <div class="container main-footer">
          <div class="row">
            <div class="col-lg-6 col-md-5 col-sm-12 sponsor">
              <div class="form-group float-start sponsor-title">
                <h3>Organized by</h3>
                <div class="s-image">
                  <img src="img/dhivehi-logo.jpg" class="img-fluid" id="output">
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-5 col-sm-12 sponsor secondline">
              <div class="footer-info sponsor-title">
                <h3>Dhivehi Expo Services (Pvt) Ltd.</h3>
                <ul class="info" style="padding-left: 0rem;">
                <li class="address">
                  <a
                  ><i class="icon fa fa-map-marker-alt"></i>C/O MJ & S, Galholhu Aage, Majeedhee Magu, Malé 20119,Maldives.</a
                  >
                </li>
                <li class="phone">
                  <a href="tel:009607792241"
                  ><i class="icon fa-solid fa-phone"></i>
                  00960 779 2241 </a
                  >
                  <a href="tel:0094768255584">
                  0094 768 255 584</a
                  >
                  <a href="tel:0094773959835">
                  0094 773 959 835</a
                  >
                </li>
                <li class="email">
                  <a href="mailto:mkt@fhamaldives.com"
                  ><i class="icon fa fa-envelope"></i>
                  mkt@fhamaldives.com</a
                  >
                </li>
                <li class="web">
                  <a href="https://fhamaldives.com/" target="_blank"
                  ><i class="icon fa-brands fa-internet-explorer"></i>
                  www.fhamaldives.com</a
                  >
                </li>
                <li class="facebook">
                  <a href="https://web.facebook.com/FHAMEXHIBITION" target="_blank"
                  ><i class="icon fa-brands fa-facebook-f"></i>
                  FHAMEXHIBITION</a
                  >
                </li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
      </form>
    </section>
    <script>
      $('#form').validation({
      'autocomplete': 'off'
      });
    </script>
  </body>
</html>