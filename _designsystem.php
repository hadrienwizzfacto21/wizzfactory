<?php include 'header.php'; ?>
<link rel="stylesheet" href="normalize.css" type="text/css" />
<link rel="stylesheet" href="skeleton.css" type="text/css" />

<!-- BTN && INPUT -->
<div class="container-fluid">
    <div class="row">
        <!-- BUTTONS_STYLED -->
        <div class="four columns">
            <button class="btn-small">Envoyer </button>
            <button class="btn-large">Envoyer DESKTOP-VERSION </button>
            <button class="btn-round">Envoyer </button>
            <button class="btn-round">Consulter <i class="fa fa-address-book"></i></button>
            <button class="btn-round">télécharger<i class="fa fa-address-book"></i> </button>
            <div class="contain-label"></div>
            <i class="fa fa-phone"></i>
            <i class="fa fa-search"></i>
            <i class="fa fa-calendar-o"></i>

        </div>
        <!-- BUTTONS -->
        <div class="eight columns">
            <button href="#" class="button button-secondary">Large</button>
            <button href="#" class="button button-primary">extrasmall</button>
            <button href="#" class="button button-tertiary">extrasmall</button>
            <button href="#" class="button button-secondary">small</button>
            <button href="#" class="button button-prime">small</button>

            <button href="#" class="button button-secondary">medium</button>
            <button href="#" class="button button-secondary">mediumlarge</button>
            <button href="#" class="button button-secondary">mediumlarge</button>

            <button href="#" class="button button-secondary">Large</button>
            <button href="#" class="button button-secondary">extraLarge</button>
            <button href="#" class="button button-secondary">extraLarge</button>

            <button href="#" class="button button-secondary">round</button>
            <button href="#" class="button button-secondary">extraround</button>
            <button href="#" class="button button-tertiary">test</button>
            <button href="#" class="button">rdv</button>

        </div>
    </div>
</div>

<!--INPUTS PLAIN-->
<div class="container-fluid">
    <div class="row">
        <!-- INPUTS_STYLED -->
        <div class="three columns">
            (365X54px)<label>Your email* </label>
            <input id="input1" class="input-tertiary" placeholder="06 00 00 00 00">
            (365X54px)<label>Your email* </label>
            <input id="input1" placeholder="hpoulenc@gmail.com">
            (300X40px)<label>Votre nom*</label>
            <input id="input1-sm" class="input-secondary" placeholder="06 00 00 00 00">
            <label>votre numéro* </label>
            <input id="input1-sm" class="input-primary" placeholder="06 00 00 00 00">



        </div>
        <!-- INPUTS -->
        <div class="three columns">
            (365X54px)<label>Your email*</label>
            <input id="input1" class="input-tertiary" placeholder="johndoe@wizzfacto.fr">
            (365X54px)<label>votre numéro* </label>
            <input id="input1" class="input-primary" type="email" placeholder="06 00 00 00 00">
            (365X54px)<label>Your email*</label>
            <input id="input1" type="email" placeholder="06 00 00 00 00">
            (365X54px)<label>Votre nom* </label>
            <input id="input1-sm" class="input-secondary" type="email" placeholder="06 00 00 00 00">
        </div>
        <!-- INPUTS -->
        <div class="three columns">
            (365X54px)<label>Your email*</label>
            <input id="input1" class="input-tertiary" type="email" placeholder="johndoe@wizzfacto.fr">
            (365X54px)<label>Votre nom* </label>
            <input id="input1" class="input-secondary" type="email" placeholder="johndoe@wizzfacto.fr">
            (365X54px)<label>votre numéro* </label>
            <input id="input1" class="input-primary" type="email" placeholder="johndoe@wizzfacto.fr">

        </div>
        <div class="three columns">
            (365X54px)<label>Votre nom* </label>
            <input id="input1" class="input-tertiary" type="email" placeholder="johndoe@wizzfacto.fr">
            (365X54px)<label>votre numéro* </label>
            <input id="input1" class="input-secondary" type="email" placeholder="06 00 00 00 00">
            (365X54px)<label>Your email* </label>
            <input id="input1" class="input-primary" type="email" placeholder="johndoe@wizzfacto.fr">
            (365X54px)<label>Votre nom*</label>
            <input id="input1" class="input-primary" type="email" placeholder="johndoe@wizzfacto.fr">
        </div>
    </div>

    <div class="container-fluid" style="background-color: white">

        <div class="row">

            <div class="six columns">
                <h4 class="title">Filled Inputs</h4>
                (365X54px)<div class="omrs-input-group">
                    <label class="omrs-input-underlined">
                        <input id="input2" required>
                        <span class="omrs-input-label">Rentrez votre nom <i class="fa fa-address-book"></i></span>
                        <span class="omrs-input-helper">Vous êtes déjà connecté !</span>

                    </label>
                </div>
                (365X54px)<div class="omrs-input-group">
                    <label class="omrs-input-underlined omrs-input-danger">
                        <input id="input2" required>
                        <span class="omrs-input-label">Adresse mail non valide <i class="fa fa-address-book"></i></span>
                        <span class="omrs-input-helper">Rentrez une adresse mail valide</span>
                    </label>
                </div>
                (365X54px)<div class="omrs-input-group">
                    <label class="omrs-input-underlined">
                        <input id="input2" required disabled>
                        <span class="omrs-input-label">Danger <i class="fa fa-address-book"></i></span>
                        <span class="omrs-input-helper">Helper Text</span>
                    </label>
                </div>
                </form>
            </div>
            <div>
            </div>
            <div class="six columns">
                <h4 class="title">UNFILLED Filled Inputs</h4>
                (365X54px)<div class="omrs-input-group">
                    <label class="omrs-input-filled">
                        <input id="input2" required>
                        <span class="omrs-input-label">Profession* <i class="fa fa-calendar-o"></i></span>
                        <span class="omrs-input-helper">ex: Ingénieur</span>
                    </label>
                </div>
                (365X54px)<div class="omrs-input-group">
                    <label class="omrs-input-filled omrs-input-danger">
                        <input id="input2" required>
                        <span class="omrs-input-label">Numéro incorrect <i class="fa fa-phone"></i></span>
                        <span class="omrs-input-helper">Rentrez un numéro à 10 chiffres</span>
                    </label>
                </div>
                (365X54px)<div class="omrs-input-group">
                    <label class="omrs-input-underlined">
                        <input id="input2" required disabled>
                        <span class="omrs-input-label">S'inscrire pour se connecter <i class="fa fa-times"></i></span>
                        <span class="omrs-input-helper"> Inscrivez vous pour remplir ce champs</span>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>

<!--FORMS-->


<div class="container"  style="background-color: white;">

<div class="six columns">
        <form>
            <h1 class="formtitle-center">Vos coordonnées</h1>
            <div class="row">
                <label for="exampleEmailInput">Votre mail </label>
                <input id="input1" class="u-full-width" type="email" placeholder="test@mailbox.com" id="exampleEmailInput">
            </div>

            <label for="exampleRecipientInput">Votre domaine d'activité </label>
            <select id="input1" class="u-full-width" id="exampleRecipientInput">
                <option value="Option 1">choisir</option>
                <option value="Option 2">événementiel</option>
                <option value="Option 3">retail</option>
            </select>
            <label for="exampleMessage">Message </label>
            <textarea id="input1" class="u-full-width" placeholder="Décrivez votre demande en quelques mots (optionnel)"
                id="exampleMessage"></textarea>
            <label class="example-send-yourself-copy">
                <input type="checkbox">
                <span class="label-body">J'accepte le règlement du jeu *</span>
            </label>

            <label class="example-send-yourself-copy">
                <input type="checkbox">
                <span class="label-body">J'accepte de recevoir la Newsletter
                    de [ XXXX ] par email</span>
            </label>

            <label class="example-send-yourself-copy">
                <input type="checkbox">
                <span class="label-body">Je certifie avoir au moins 18 ans*</span>
            </label>


                <button href="#" class="button button-secondary">ENVOYER</button>
     
        <form> 
         <div class="row">
             <p id="sm-text" >
             [ XXXX ] collecte et traite vos données personnelles recueillies par ce 
             formulaire afin de gérer votre participation au jeu. 
             Pour en savoir plus sur la gestion de vos données personnelles
              et pour exercer vos droits, merci de cliquer ici.
             </p> 
         </div>

        <hr></hr> 
             <div class="example">       
                    <a href="#"  class="link" >Règlement |</a>
                    <a href="#"  class="link" >Mentions légales |</a>
                    <a  href="#"   class="link" >Politique de confidentialité |</a>
                    <a   href="#"  class="link" >Préférences</a>
             </div>        
    </div>
</div>
<div class="container"  style="background-color: black; ">
<div class="six columns">
        <form>
            <div class="row">
                <h1 class="formtitle">Vos coordonnées</h1>
                    <label for="exampleEmailInput">Votre mail </label>
                    <input id="input1" class="u-full-width" type="email" placeholder="test@mailbox.com" id="exampleEmailInput">
            </div>

            <label for="exampleRecipientInput">Votre domaine d'activité </label>
            <select id="input1" class="u-full-width" id="exampleRecipientInput">
                <option value="Option 1">choisir</option>
                <option value="Option 2">événementiel</option>
                <option value="Option 3">retail</option>
            </select>
            <label for="exampleMessage">Message </label>
            <textarea id="input1" class="u-full-width" placeholder="Décrivez votre demande en quelques mots (optionnel)"
                id="exampleMessage"></textarea>
            <label class="example-send-yourself-copy">
                <input type="checkbox">
                <span class="label-body">J'accepte le règlement du jeu *</span>
            </label>

            <label class="example-send-yourself-copy">
                <input type="checkbox">
                <span class="label-body">J'accepte de recevoir la Newsletter
                    de [ XXXX ] par email</span>
            </label>

            <label class="example-send-yourself-copy">
                <input type="checkbox">
                <span class="label-body">Je certifie avoir au moins 18 ans*</span>
            </label>
                <button href="#" class="button button-secondary">ENVOYER</button>
           
        <form>   
    </div>
</div>

<div class="container" style="border: solid 1px white !important;">
    <div class="six columns">
        <form>
            <div class="row">
                <label for="exampleEmailInput">Votre mail </label>
                <input id="input1" class="u-full-width" type="email" placeholder="test@mailbox.com" id="exampleEmailInput">
            </div>

            <label for="exampleRecipientInput">Votre domaine d'activité </label>
            <select id="input1" class="u-full-width" id="exampleRecipientInput">
                <option value="Option 1">choisir</option>
                <option value="Option 2">événementiel</option>
                <option value="Option 3">retail</option>
            </select>
            <label for="exampleMessage">Message </label>
            <textarea id="input1" class="u-full-width" placeholder="Décrivez votre demande en quelques mots (optionnel)"
                id="exampleMessage"></textarea>
            <label class="example-send-yourself-copy">
                <input type="checkbox">
                <span class="label-body">J'accepte le règlement du jeu *</span>
            </label>

            <label class="example-send-yourself-copy">
                <input type="checkbox">
                <span class="label-body">J'accepte de recevoir la Newsletter
                    de [ XXXX ] par email</span>
            </label>

            <label class="example-send-yourself-copy">
                <input type="checkbox">
                <span class="label-body">Je certifie avoir au moins 18 ans*</span>
            </label>

           
                <button href="#" class="button button-secondary">ENVOYER</button>
   
        <form>   
    </div>  
</div>

<main class="contact">
    <div class="contact-form">
        <div class="container">
            <div class="row">
                    <h2>Vous avez un projet ?</h2>
                    <p>Envoyez-nous un message, nous vous répondrons au plus vite !</p>

                    <form >
                        <div class="form-control">
                            <input class="u-full-width" type="text" name="nom" placeholder="Nom" required=""/>
                        </div>
                        <div class="form-control">
                            <input class="u-full-width" type="email" name="email" placeholder="Adresse e-mail" required=""/>
                        </div>
                        <div class="form-control">
                            <input class="u-full-width" type="text" name="telephone" placeholder="Numéro de téléphone"/>
                        </div>
                        <textarea class="u-full-width" name="texte" placeholder="Message" required=""></textarea>

                        <div class="form-control">
                            <p>Saississez le code suivant ci-dessous pour envoyer votre email : <span style="color:green;font-weight:bold">3178</span></p>
                            <input class="u-full-width" type="text" name="code" placeholder="Code de validation" required=""/>
                        </div>

                        <input class="button button-primary" type="submit" value="Envoyer"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>



<!--FORMS-->




   


<div class="swiper-button-prev brands-swiper-prev"></div>
<div class="swiper-button-next brands-swiper-next"></div>


<?php include 'footer.php'; ?>