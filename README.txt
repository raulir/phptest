	
task - restructure data so that:

* articles are grouped by section_id
	
	This means, that an article is accessible at:
	$new_data[<section_id>][<cms_page_panel_id>]
	
	Eg first article at:
	$new_data[45][106]
	
* in article data include only cms_page_panel_id, image, heading and lead

* submit solution as merge request or just send the file
