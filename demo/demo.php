<?php

if ($_POST['hint'] == 'dynamic') {
	echo '<h2>Static elements with tooltips, received by means of AJAX</h2>
	<div>
		<a href="#" data-hint="nw" data-title="This is an example of Northwest gravity">Northwest</a>
	</div>
	<div>
		<a href="#" data-hint="north" data-title="This is an North gravity">North</a>
	</div>
	<div>
		<a href="#" data-hint="ne" data-title="This is an example of Northeast gravity">Northeast</a>
	</div>

	<div>
		<a href="#" data-hint="west" data-title="This is an example of West gravity">West</a>
	</div>
	<div style="visibility: hidden;"></div>
	<div>
		<a href="#" data-hint="east" data-title="This is an example of East gravity">East</a>
	</div>

	<div>
		<a href="#" data-hint="sw" data-title="This is an example of Southwest gravity">Southwest</a>
	</div>
	<div>
		<a href="#" data-hint="south" data-title="This is an example of South gravity">South</a>
	</div>
	<div>
		<a href="#" data-hint="se" data-title="This is an example of Southeast gravity">Southeast</a>
	</div>';
} else die('Hacking Attempt!');

?>