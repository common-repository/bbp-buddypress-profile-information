<?php


/*******************************************
* bbp buddypress profile Information Display Functions
*******************************************/

add_action ('bbp_theme_after_reply_author_details', 'bbp_buddypress_profile_information') ;

 
function bbp_buddypress_profile_information () {
//This function adds the item and label if required to the author section of topics/replies


		global $rbi_options;
		global $wpdb;
		global $table_prefix ;
		$xfields= $table_prefix.'bp_xprofile_fields' ;
		$xdata= $table_prefix.'bp_xprofile_data' ;
		echo '<ul>';
		$user_id = bbp_get_reply_author_id();
		
		
		
		//show item1 if activated show on topics/replies
		if (!empty ($rbi_options['itemshow_item1'])) {
			echo '<li>' ;
			$label1 =  $rbi_options['item1_label'] ;
			$xpid=$wpdb->get_var("select id from $xfields where name = '$label1'") ;
			$xpdata2= $wpdb->get_var("select VALUE from $xdata where field_id  = '$xpid' AND user_id = '$user_id' ") ;
			//show label if required
			if(!empty ($rbi_options['labelshow_item1'] )) {
				$show_label = (!empty ($rbi_options['labelshow_label1']) ? $rbi_options['labelshow_label1'] : '' ) ;
				if ($show_label && (empty($xpdata2)) ) {
				 //don't show
				}
				 else {
					echo $rbi_options['item1_label'].": " ;
				 }
			}
			echo $xpdata2;
			echo '</li>' ;	
			
		}
		
		
	//show item2 if activated show on topics/replies
		if (!empty ($rbi_options['itemshow_item2'])) {
			echo '<li>' ;
			$label2 =  $rbi_options['item2_label'] ;
			$xpid=$wpdb->get_var("select id from $xfields where name = '$label2'") ;
			$xpdata2= $wpdb->get_var("select VALUE from $xdata where field_id  = '$xpid' AND user_id = '$user_id' ") ;
			
			//show label if required
			if(!empty ($rbi_options['labelshow_item2'] )) {
				$show_label = (!empty ($rbi_options['labelshow_label2']) ? $rbi_options['labelshow_label2'] : '' ) ;
				if ($show_label && (empty($xpdata2)) ) {
				 //don't show
				}
				 else {
					echo $rbi_options['item2_label'].": " ;
				 }
			}
			echo $xpdata2;
			echo '</li>' ;	
			
		}
		
		
		//show item3 if activated show on topics/replies
		if (!empty ($rbi_options['itemshow_item3'])) {
			echo '<li>' ;
			$label3 =  $rbi_options['item3_label'] ;
			$xpid=$wpdb->get_var("select id from $xfields where name = '$label3'") ;
			$xpdata2= $wpdb->get_var("select VALUE from $xdata where field_id  = '$xpid' AND user_id = '$user_id' ") ;
			
			//show label if required
			if(!empty ($rbi_options['labelshow_item3'] )) {
				$show_label = (!empty ($rbi_options['labelshow_label3']) ? $rbi_options['labelshow_label3'] : '' ) ;
				if ($show_label && (empty($xpdata2)) ) {
				 //don't show
				}
				 else {
					echo $rbi_options['item3_label'].": " ;
				 }
			}
			echo $xpdata2;
			echo '</li>' ;	
			
		}
		
		
		
		//show item4 if activated show on topics/replies
		if (!empty ($rbi_options['itemshow_item4'])) {
			echo '<li>' ;
			$label4 =  $rbi_options['item4_label'] ;
			$xpid=$wpdb->get_var("select id from $xfields where name = '$label4'") ;
			$xpdata2= $wpdb->get_var("select VALUE from $xdata where field_id  = '$xpid' AND user_id = '$user_id' ") ;
			
			//show label if required
			if(!empty ($rbi_options['labelshow_item4'] )) {
				$show_label = (!empty ($rbi_options['labelshow_label4']) ? $rbi_options['labelshow_label4'] : '' ) ;
				if ($show_label && (empty($xpdata2)) ) {
				 //don't show
				}
				 else {
					echo $rbi_options['item4_label'].": " ;
				 }
			}
			echo $xpdata2;
			echo '</li>' ;	
			
		}

	echo '</ul>' ;	



		
}




?>