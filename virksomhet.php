<!DOCTYPE html>
<html>

<head>
    <title>Virksomheter | InMarket</title>
    <?php include_once 'templates/head.php'; ?>
</head>

<body>
<?php
include_once 'templates/navigation.php';
include_once 'templates/cookie_notice.php';
?>

<div class="w3-row margin-top-100" style="background: #181717;height:calc(100vh - 80px);">
    <div class="w3-col l7 white-text w3-large w3-container">
        <article class="narrow-content w3-xlarge virksomheter-ting">
            <h2>Finn din neste ansatt mens du skaper kompetanse</h2>
            <p style="line-height:1.25;">På plattformen til InMarket venter mange talenter på en sjanse til å vise deg
                sine kvaliteter.
                Registrerte brukere er ivrige etter å bygge kompetanse og erfaring slik at de kan bli bedre kvalifiserte
                til jobb.</p>

            <div class="videoWrapper " style="height:20vh;background-position:center;background-size:cover;">
                <div style="">
                    <iframe style="position:absolute; top:-5px;" src="https://player.vimeo.com/video/327008691"
                            width="1920" height="1080" frameborder="0" webkitallowfullscreen mozallowfullscreen
                            allowfullscreen class="vimeo-video"></iframe>
                </div>
            </div>
        </article>
    </div>
    <div class="w3-col l4 white-bg w3-center w3-container" style="padding-bottom:50px;">
        <p class="w3-xxlarge w3-margin">La oss møtes</p>
        <p>Be oss inn på møte og lær hvordan dere kan bruke InMarket</p>
        <form class=""  action="javascript:void(0);" method="post" id="kontaktSkjemaVirksomhet">

            <div class=" w3-content w3-center register-container">
                <p>Bedrift:​</p>
                <input type="text" name="bedriftnavn" value="" placeholder="Bedriftsnavn"
                       class="w3-input w3-animate-input" required id="inputKommune">
                <p>E-post:</p>
                <input type="email" name="email" value="" placeholder="deg@eksempel.no​" id="inputPlace"
                       class="w3-input w3-animate-input" required id="inputEpost">

                <p>Kommune:</p>
                <input type="text" name="kommune" value="" placeholder="Navnet på din kommune" required
                       class="w3-input w3-animate-input" id="inputKommune">

                <label>
                    <p class="w3-margin" style="font-weight:normal">

                        Jeg godkjenner InMarkets Vilkår for Bruk og <br> <a
                                href="personvern.php" style="text-decoration:underline;" target="_blank">Personvernerklæring</a>.​

                        <input type="checkbox" name="personvern" id="personvern" value="student"
                               class="klient-radio " style="width:1px; position:relative; left:20px; opacity:0;"
                               required>
                        <i class="fas fa-user-tie w3-xlarge new-radio"></i>
                    </p>
                </label>

                <button class="black-button w3-card  w3-padding-8" type="button" onClick="button()">
                    Avtal møte
                </button>
                <span>
                    <strong>
                         Eller
                    </strong>
                </span>
                <button formnovalidate class="black-button w3-card w3-padding-8 " type="submit" id="submit"
                        formaction="forhandsregistreringbedrift.php">Registrer bedriften din nå
                </button>

                <button onclick="" type="submit" id="checkValidity" style="opacity:0;">
                </button>
            </div>
        </form>

        <div style="display:none;" id="kontaktRespons">
            <div class=" w3-content w3-center register-container">
                <p>Takk for henvendelsen! Dere vil bli kontaktet så fort som mulig</p>
            </div>
        </div>
    </div>
</div>

<div class="w3-container w3-center w3-content w3-large w3-padding-32 w3-card"
     style="margin-top:20px!important;width:70vw; margin:auto;">
    <div class="w3-row w3-hide-small w3-hide-medium">
        <div class="w3-col l5">
            <img src="img/people-woman-coffee-meeting.jpg" style="width:100%;border-radius:5px;"/>
        </div>
        <div class="w3-col l6 w3-center w3-margin">
            <p>Plattformen kobler dere til kandidater som passer deres behov. Dere betaler kun for tiden dere bruker på
                møter, prosjekter, intervjuer eller oppdrag med brukerne på plattformen.</p>
            <p>Bli med å bygge kompetansen til arbeidssøkere samtidig som dere ser etter den beste kandidaten til
                arbeidsplassen.</p>
        </div>
    </div>
    <div class="w3-row w3-row-padding">
        <div class="w3-col l5">
            <p>La vårt automatiserte system koble deg med potensielle arbeidstakere</p>
        </div>
        <div class="w3-col l7 w3-center w3-hide-medium">
            <p>
                <a href="forhandsregistreringbedrift.php" class="black-button w3-card">Registrer bedrift nå</a>
            </p>
        </div>
    </div>
</div>

<div class="narrow-content w3-center w3-container">
    <h2 class="w3-margin " style="margin-top:60px!important;">Hvordan funker det?</h2>

    <div class="w3-row  w3-padding-32">
        <div class="w3-col l55 text-align-right w3-container medium-center">
            <strong class="golden-text w3-xlarge w3-hide-large">1.0</strong>
            <div class="golden-text w3-xlarge">Beskriv ditt ønske</div>
            <p>List opp kvalifikasjonene dere trenger slik at systemet kan finne de rette kandidatene for din
                bedrift.​</p>
        </div>

        <div class="w3-col m1 w3-container w3-hide-small w3-hide-medium" style="position:relative">
            <strong class="golden-text w3-xlarge">1.0</strong>
            <div class="arrow "></div>
        </div>
        <div class="w3-col m25 w3-container w3-hide-small w3-hide-medium">
            <img src="img/hacker.jpg" alt="" style="width:100%;" class="w3-circle image-size">
        </div>
        <div class="w3-col m3 w3-hide-small w3-hide-medium speech-bubble-container">
            <div class="speech-bubble-left w3-container">
                <p>Vi ser etter noen med ferdighet innen JavaScript og SQL.</p>
            </div>
        </div>
        <div class="w3-container w3-hide-large w3-center" style="position:relative;">
            <div class="arrow-mobile " ></div>
        </div>
    </div>

    <div class="w3-row w3-padding-64">
        <div class="w3-col l55 w3-container w3-hide-small w3-hide-medium">
            <div class="w3-row">
                <div class="w3-col l4">
                    <img src="img/blonde.jpg" alt="" style="width:100%;" class="w3-circle image-size">
                </div>
                <div class="w3-col l4">
                    <img src="img/singapore.jpg" alt="" style="width:100%;" class="w3-circle image-size">
                </div>
                <div class="w3-col l4">
                    <img src="img/chris-africa.jpg" alt="" style="width:100%;" class="w3-circle image-size">
                </div>
            </div>
        </div>
        <div class="w3-col m1 w3-container w3-hide-small w3-hide-medium" style="position:relative">
            <strong class="golden-text w3-xlarge">2.0</strong>
            <div class="arrow " style="height:200px"></div>
        </div>

        <div class="w3-col l55 text-align-left w3-container medium-center">
            <strong class="golden-text w3-xlarge w3-hide-large">2.0</strong>
            <div class="golden-text w3-xlarge">Oppnå kontakt</div>
            <p>Dere velger hvilke brukere dere vil ta kontakt med. Lag en avtale og bli enige om når, hvor og hva.</p>
        </div>
        <div class="w3-container w3-hide-large w3-center" style="position:relative;">
            <div class="arrow-mobile "></div>
        </div>
    </div>

    <div class="w3-row w3-padding-32" >
        <div class="w3-col l55 text-align-right medium-center w3-container">
            <strong class="golden-text w3-xlarge w3-hide-large">3.0</strong>
            <div class="golden-text w3-xlarge">Velg ditt neste trekk</div>
            <p>Når du har prøvd ut en bruker lenge nok kan du velge om du vil ansette dem eller prøve ut andre
                kandidater.​​</p>
        </div>
        <div class="w3-col m1 w3-container w3-hide-small w3-hide-medium" style="position:relative">
            <strong class="golden-text w3-xlarge">3.0</strong>
        </div>
        <div class="w3-col m25 w3-container w3-hide-small w3-hide-medium">
            <img src="img/startled.jpg" alt="" style="width:100%;" class="w3-circle image-size">
        </div>
        <div class="w3-col m3 w3-hide-small w3-hide-medium speech-bubble-container">
            <div class="speech-bubble-left w3-container">
                <p>Vi er fornøyd med det du har vist oss i dag. Vil du komme igjen annen gang?</p>
            </div>
        </div>
    </div>

    <div class="w3-center w3-padding-32 w3-xlarge">
        <a href="forhandsregistreringbedrift.php" class="black-button w3-card w3-padding-16 w3-margin">Registrer
            bedriften din</a>

        <p class="w3-xlarge" style="padding-bottom:32px;">Kontakten brukeren har hatt med din bedrift og tilbakemelding
            på ferdigheter loggføres på profilen til
            brukeren. Inviter folk inn, slik at de kan bygge erfaringer som vil hjelpe dem videre i arbeidslivet.</p>

    </div>
</div>

<?php include_once 'templates/scripts.php'; ?>

<script src="js/contactForm.js" charset="utf-8"></script>

</body>

</html>
