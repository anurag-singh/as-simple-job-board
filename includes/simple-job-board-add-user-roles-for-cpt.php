<?php 
     // Give rights to only perticular users to edit CPT 'jobpost'
		
	add_action('admin_init','hr_add_role_caps',999);
    function hr_add_role_caps() {

        // Add the roles you'd like to administer the custom post types
        $roles = array('human_resource','editor','administrator');
        
        // Loop through each role and assign capabilities
        foreach($roles as $the_role) { 

             $role = get_role($the_role);
            
                 $role->add_cap( 'read' );
                 $role->add_cap( 'read_jobpost');
                 $role->add_cap( 'read_private_jobposts' );
                 $role->add_cap( 'edit_jobpost' );
                 $role->add_cap( 'edit_jobposts' );
                 $role->add_cap( 'edit_others_jobposts' );
                 $role->add_cap( 'edit_published_jobposts' );
                 $role->add_cap( 'publish_jobposts' );
                 $role->add_cap( 'delete_others_jobposts' );
                 $role->add_cap( 'delete_private_jobposts' );
                 $role->add_cap( 'delete_published_jobposts' );        
        }
        
    }


add_action('admin_init','hr_add_role_capss',999);
    function hr_add_role_capss() {

        // Add the roles you'd like to administer the custom post types
        $roles = array('human_resource','editor','administrator');        
        

        // Loop through each role and assign capabilities
        foreach($roles as $the_role) { 

             $role = get_role($the_role);
            
                 $role->add_cap( 'read' );
                 $role->add_cap( 'read_jobpost_applicants');
                 $role->add_cap( 'read_private_jobpost_applicants' );
                 $role->add_cap( 'edit_jobpost_applicants' );
                 $role->add_cap( 'edit_jobpost_applicants' );
                 $role->add_cap( 'edit_others_jobpost_applicants' );
                 $role->add_cap( 'edit_published_jobpost_applicants' );
                 $role->add_cap( 'publish_jobpost_applicants' );
                 $role->add_cap( 'delete_others_jobpost_applicants' );
                 $role->add_cap( 'delete_private_jobpost_applicants' );
                 $role->add_cap( 'delete_published_jobpost_applicants' );        
        }
    }