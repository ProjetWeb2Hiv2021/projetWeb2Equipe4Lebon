section class="formulaireCommande" data-component="FormulaireCommande" data-js-component="Form" data-js-nomutilisateur="<?= $data["nomUtilisateur"]?>">

	

	<form data-js-livraisonform>

	<?php
   
	if(isset($_COOKIE['lang'])){
		$lang = $_COOKIE['lang'];
	}else{
		$lang ="fr";
	} 	 
	
	
	if($data["expedition"]){
		?>
		
		
		<div class="input-wrapper" data-js-input-wrapper data-js-radio="required" data-js-param="info" data-js-input="Expedition">
		<label for="radio-livraison"><?=TXT__FORMCOM_EXP?></label>
		<div data-livraion>
		<?php
		foreach ($data["expedition"] as $expedition) {
			
		?>
		<div>
			<input type="radio" id="radio-livraison" name="radio-livraison" value="<?=$expedition["idExpedition"]?>" data-js-param="expedition"><label for="radio-livraison"><?=$expedition["expedition$lang"]?>
			<?php
			if($expedition["idExpedition"] == "1"){
				echo " 75 $/Voiture";
			}
			
			?>
			
			</label>
		</div>
		<?php
		}
		?>
		<br><small class="error-message" data-js-error-msg></small>
		</div>
		</div>

		
		
	<?php
	}
	

	
	?>
		<button  data-js-submit ><a href="#btn2">Commander 1/3</a></button>
	</form>
	<form data-js-paimentform id="paimentform">
		<?php
		if($data["modepaiement"]){
			?>
			<div class="input-wrapper" data-js-input-wrapper data-js-radio="required" data-js-param="info" data-js-input="<?=TXT__FORMCOM_MPAI?>" data-js-paiment>
				<label for="radio-paiement"><?=TXT__FORMCOM_MPAI?></label><br>
			<?php
			
			foreach ($data["modepaiement"] as $modepaiement) {
				
			?>
				<div>
				<input type="radio" id="radio-paiement" name="radio-paiement" value="<?=$modepaiement["idModePaiement"]?>" data-js-param="cartechoix"
				<?php
				if($modepaiement["idModePaiement"] == "2"){
					echo "data-js-carte";
				}else if($modepaiement["idModePaiement"] == "5"){
					echo "data-js-paypal";
				}
				?>
				><label for="radio-paiement"><?=$modepaiement["modePaiement$lang"]?></label>
			</div>
			<?php
			}
			?>
			<br><small class="error-message" data-js-error-msg></small>
			
			</div>
	
			<?php
		}
	?>
	<button  data-js-btncommander3 id="btn3">Commander 3/3</button>
	</form>


</section>
<script src="https://www.paypal.com/sdk/js?client-id=test&currency=CAD"></script>

<!-- Include the PayPal JavaScript SDK -->
<div  class="hidden payementDesc"  data-js-payement>   
	<div>
			<h1>Dernière étape !</h1>
			<p> Payer la quantité finale par paypal
				<h4 data-js-quantite> 300</h4>
					<!-- Set up a container element for the button -->
					<div id="paypal-button-container"></div>
			</p>
			<p> Les voitures seront disponibles une fois que vous avez fait le paiement
				<strong>(Plus d'information: caruse@yahoo.com)
				
				</strong>
			</p>
</div>

</div>




