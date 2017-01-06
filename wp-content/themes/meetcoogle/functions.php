<?php

function code_generator($advertid){
global $wpdb;
	$table_name = $wpdb->prefix . 'gencode';
	$user_id = get_current_user_id();
	 
	$prepared_statement = $wpdb->prepare("SELECT code FROM {$table_name} WHERE status is NULL and advertid = %d", $advertid);
	$values = $wpdb->get_col( $prepared_statement );
	if(isset($values[0])){
		echo do_shortcode("[indeed-social-locker sm_list='fb' sm_template='ism_template_1' sm_list_align='horizontal' sm_display_counts='false' sm_display_full_name='true' unlock_type=1 locker_template=2 sm_d_text='<h2>This content is locked</h2><p>Share This Page To Unlock The Content!</p>' ism_overlock='default' ] " . $values[0] ."   [/indeed-social-locker]");
	} if(isset($values[1])){
		echo do_shortcode("[indeed-social-locker sm_list='tw' sm_template='ism_template_1' sm_list_align='horizontal' sm_display_counts='false' sm_display_full_name='true' unlock_type=1 locker_template=2 sm_d_text='<h2>This content is locked</h2><p>Share This Page To Unlock The Content!</p>' ism_overlock='default' ] " . $values[1] ."   [/indeed-social-locker]");
	} else{
		echo "No more free code";
	}

}
add_shortcode('gencode', 'code_generator');

///[gencode advertid=""]



?>
