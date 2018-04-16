<?php

/*

	articles data comes in in this format

*/

$api_data = 'a:3:{i:106;a:19:{s:6:"author";s:12:"Oswald Otter";s:4:"date";s:10:"2018/04/12";s:7:"heading";s:14:"Why play golf?";s:5:"image";s:24:"2018/04/boy_on_field.jpg";s:4:"lead";s:136:"Golf is a unique sport, combining periods
of intense focus and skill with much longer
periods of walking around beautiful
landscapes.";s:6:"panels";a:5:{s:3:"000";s:3:"107";s:3:"001";s:3:"108";s:3:"002";s:3:"109";s:3:"003";s:3:"110";s:3:"004";s:3:"111";}s:10:"section_id";s:2:"97";s:17:"_template_page_id";s:1:"3";s:8:"block_id";s:3:"106";s:7:"page_id";s:1:"0";s:9:"parent_id";s:1:"0";s:4:"show";s:1:"1";s:4:"sort";s:1:"1";s:5:"title";s:14:"Why play golf?";s:10:"panel_name";s:10:"eg/article";s:14:"submenu_anchor";s:0:"";s:13:"submenu_title";s:0:"";s:17:"cms_page_panel_id";s:3:"106";s:11:"cms_page_id";s:1:"0";}i:11;a:19:{s:6:"author";s:12:"Oswald Otter";s:4:"date";s:10:"2018/03/15";s:7:"heading";s:63:"The article title will go in this area and can be up to 3 lines";s:5:"image";s:18:"2018/03/forest.jpg";s:4:"lead";s:98:"Have you made your nominations for the England Golf Awards 2018? Here\'s five great reasons why you";s:10:"section_id";s:2:"45";s:4:"text";s:569:"<p>Etiam id tellus nec justo ornare rutrum. Aenean dapibus malesuada eros, ac fringilla quam lacinia a. Etiam commodo consectetur urna sit amet semper. Phasellus nec ullamcorper risus. Etiam dignissim mattis libero, vel lacinia ipsum dignissim nec. Fusce massa tortor, suscipit ut enim quis, rutrum consequat lorem.</p>
<p>Mauris interdum semper sagittis. Sed sit amet risus quis nulla sollicitudin malesuada. Maecenas et egestas orci. In hac habitasse platea dictumst. Praesent condimentum mauris metus, at pharetra lectus efficitur ac. Fusce non fringilla felis.</p>";s:17:"_template_page_id";s:1:"3";s:8:"block_id";s:2:"11";s:7:"page_id";s:1:"0";s:9:"parent_id";s:1:"0";s:4:"show";s:1:"1";s:4:"sort";s:1:"2";s:5:"title";s:63:"The article title will go in this area and can be up to 3 lines";s:10:"panel_name";s:10:"eg/article";s:14:"submenu_anchor";s:0:"";s:13:"submenu_title";s:0:"";s:17:"cms_page_panel_id";s:2:"11";s:11:"cms_page_id";s:1:"0";}i:12;a:19:{s:6:"author";s:12:"Oswald Otter";s:4:"date";s:10:"2018/03/15";s:7:"heading";s:38:"This is another, but important article";s:5:"image";s:18:"2018/03/garden.jpg";s:4:"lead";s:98:"Have you made your nominations for the England Golf Awards 2018? Here\'s five great reasons why you";s:10:"section_id";s:2:"45";s:4:"text";s:569:"<p>Etiam id tellus nec justo ornare rutrum. Aenean dapibus malesuada eros, ac fringilla quam lacinia a. Etiam commodo consectetur urna sit amet semper. Phasellus nec ullamcorper risus. Etiam dignissim mattis libero, vel lacinia ipsum dignissim nec. Fusce massa tortor, suscipit ut enim quis, rutrum consequat lorem.</p>
<p>Mauris interdum semper sagittis. Sed sit amet risus quis nulla sollicitudin malesuada. Maecenas et egestas orci. In hac habitasse platea dictumst. Praesent condimentum mauris metus, at pharetra lectus efficitur ac. Fusce non fringilla felis.</p>";s:17:"_template_page_id";s:1:"3";s:8:"block_id";s:2:"12";s:7:"page_id";s:1:"0";s:9:"parent_id";s:1:"0";s:4:"show";s:1:"1";s:4:"sort";s:1:"3";s:5:"title";s:38:"This is another, but important article";s:10:"panel_name";s:10:"eg/article";s:14:"submenu_anchor";s:0:"";s:13:"submenu_title";s:0:"";s:17:"cms_page_panel_id";s:2:"12";s:11:"cms_page_id";s:1:"0";}}';

$api_data = unserialize($api_data);

print('<pre>BEFORE:'."\n\n");

print_r($api_data);

$new_data = [];

/*

	task - restructure data so that:

	* articles are grouped by section_id
	
		This means, that an article is accessible at:
		$new_data[<section_id>][<cms_page_panel_id>]
	
		Eg first article at:
		$new_data[45][106]
	
	* in article data include only cms_page_panel_id, image, heading and lead
	
	* submit solution as merge request or just send the file
	
*/

// populate $new_data here:







// end

/* 

	output
	
*/

print("\n\n".'AFTER:'."\n\n");

print_r($new_data);
