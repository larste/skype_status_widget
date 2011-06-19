<ol>
	<li class="even">
		<label>Username</label>
		<?php echo form_input('username', $options['username']); ?>
	</li>
	<h3>Static buttons</h3>
	<li class="uneven">
		<?php echo form_radio('skype_button', 'green_white_153x63') ?>
		<img src="http://www.skypeassets.com/i/legacy/images/share/buttons/call_green_white_153x63.png" />
	</li>
	<li class="uneven">
		<?php echo form_radio('skype_button', 'green_white_92x82') ?>
		<img src="http://www.skypeassets.com/i/legacy/images/share/buttons/call_green_white_92x82.png" />
	</li>
	<li class="uneven">
		<?php echo form_radio('skype_button', 'blue_white') ?>
		<img src="http://www.skypeassets.com/i/legacy/images/share/buttons/call_blue_white_124x52.png" />
	</li>
	<li class="uneven">
		<?php echo form_radio('skype_button', 'blue_transparent') ?>
		<img src="http://www.skypeassets.com/i/legacy/images/share/buttons/call_blue_transparent_34x34.png" />
	</li>
	<h3>Dynamic buttons</h3>
	<li class="uneven">
		<?php echo form_radio('skype_button', 'balloon') ?>
		<img src="http://www.skypeassets.com/i/legacy/images/share/buttons/anim_balloon.gif" />
	</li>
	<li class="uneven">
		<?php echo form_radio('skype_button', 'rectangle') ?>
		<img src="http://www.skypeassets.com/i/legacy/images/share/buttons/anim_rectangle.gif" />
	</li>
</ol>