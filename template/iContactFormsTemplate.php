<div id="fficns_form_container" class="fficns_form_container" style="background-color:<?php echo $background_color; ?>">
	<div id="fficns_headline" class="fficns_headline"><?php echo $headline; ?></div>
	<?php
		if($image){
	?>
	<div id="fficns_image" class="fficns_image"><img src="<?php echo $image ?>"/></div>
	<?php
		} //end if($image)
	?>
	<div id="fficns_message" class="fficns_message"><?php echo wpautop($message); ?></div>
	<div id="fficns_form_box">
		<form action="<?php echo $icontact_form_action ?>" id="fficns_form" accept-charset="utf-8" method="post">
			<div id="fficns_name_field">
				<input type="text" name="data[fname]" placeholder="Enter Your Name" class="fficns_name">
			</div>
			<div id="fficns_email_field">
				<input type="text" name="data[email]" placeholder="Enter Your Email" class="fficns_email">
			</div>
		</form>
	</div>
	<div id="fficns_button" class="fficns_button">
		<a class="btn" href="#" style="background:<?php echo $button_color; ?>"><?php echo $button_text; ?></a>
	</div>
</div>
