
<?php include 'header.php'; ?> 
<link rel="stylesheet" href="normalize.css" type="text/css"/>
<link rel="stylesheet" href="skeleton.css" type="text/css"/>

<!-- BTN && INPUT -->
<div class="container-fluid">
    <div class="row">
        <!-- BUTTONS_STYLED -->
        <div class="four columns"> 
            <button class="btn-small">Envoyer </button>
            <button class="btn-medium">Envoyer DESKTOP-VERSION </button>
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
            <label>Your email</label>
            <input id="input1" type="email">   
            <label>Votre nom</label>
            <input id="input1" type="email">
            <label>votre numéro</label>
            <input id="input1" class="input-primary" placeholder="06 00 00 00 00">  
            <label>Your email</label>
            <input  type="email">   

        </div>
        <!-- INPUTS -->
        <div class="three columns"> 
            <label>Your email*</label>
            <input id="input1" type="email">   
            <label>Votre nom*</label>
            <input id="input1" type="email">
            <label>votre numéro*</label>
            <input id="input1" class="input-primary" type="email" >  
            <label>Your email</label>
            <input id="input1" type="email">   
        </div>
        <!-- INPUTS -->
        <div class="three columns"> 
            <label>Your email*</label>
            <input id="input1"  type="email">   
            <label>Votre nom*</label>
            <input id="input1"  type="email">
            <label>votre numéro*</label>
            <input id="input1" class="input-primary" >  
            <label>Your email*</label>
            <input id="input1" type="email">   
        </div>
        <div class="three columns"> 
            <label>Votre nom*</label>
            <input id="input1" type="email">
            <label>votre numéro*</label>
            <input id="input1" class="input-primary" type="email" >  
            <label>Your email*</label>
            <input id="input1" type="email">   
            <label>Votre nom*</label>
            <input id="input1" type="email">       
    </div>
</div>







  <div class="container-fluid" style="background-color: white">
 
      <div class="row">

            <div class="six columns">       
            <h4 class="title">Filled Inputs</h4>
                <div class="omrs-input-group">
                <label class="omrs-input-underlined">
              
                <input id="input2" required>
                <span class="omrs-input-label">Normal <i class="fa fa-address-book" style="color: black;"></i></span>
                <span class="omrs-input-helper">Helper Text</span>
           
                </label>
                </div>
                <div class="omrs-input-group">
                <label class="omrs-input-underlined omrs-input-danger">
                <input id="input2" required>
                <span class="omrs-input-label">Danger <i class="fa fa-address-book" style="color: black;"></i></span>
                <span class="omrs-input-helper">Helper Text</span>
                </label>
                </div>
                <div class="omrs-input-group">
                <label class="omrs-input-underlined">
                <input id="input2" required disabled>
                <span class="omrs-input-label">Danger <i class="fa fa-address-book" style="color: black;"></i></span>
                <span class="omrs-input-helper">Helper Text</span>
                </label>
                </div>
                </form>
                </div>
                <div>
            </div>
        
            <div class="six columns">
            <h4 class="title">UNFILLED Filled Inputs</h4>
                <div class="omrs-input-group">
                <label class="omrs-input-filled">
                <input id="input2" required>
                <span class="omrs-input-label">Normal <i class="fa fa-calendar-o" style="color: black;"></i></span>
                <span class="omrs-input-helper">Helper Text</span>
                </label>
                </div>
                <div class="omrs-input-group">
                <label class="omrs-input-filled omrs-input-danger">
                <input id="input2" required>
                <span class="omrs-input-label">Danger <i class="fa fa-phone" style="color: black;"></i></span>
                <span class="omrs-input-helper">Helper Text</span>
                </label>
                </div>
                <div class="omrs-input-group">
                <label class="omrs-input-underlined">
                <input id="input2"  required disabled>
                <span class="omrs-input-label">Danger <i class="fa fa-search" style="color: black;"></i></span>
                <span class="omrs-input-helper">Helper Text</span>
                </label>
                </div>
            </div>
      </div>
  </div>


<div class="swiper-button-prev brands-swiper-prev"></div>
<div class="swiper-button-next brands-swiper-next"></div> 


<?php include 'footer.php'; ?> 