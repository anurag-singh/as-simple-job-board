<?php
/*
Title: New job opening form
Post Type: jobpost
*/



piklist('field', array(
    'type' => 'group'
    ,'label' => 'Job Details'
    ,'list' => false
    ,'fields' => array(


        // array(
        //     'type' => 'text'
        //     ,'scope' => 'post'
        //     ,'field' => 'post_title'
        //     ,'label' => 'Title'
        //     ,'columns' => 5            
        // )

        array(
            'type' => 'text'
            ,'field' => 'new_job_code'
            ,'label' => 'Job Code'
            ,'columns' => 3
            ,'attributes' => array(
              'placeholder' => 'TL-1'
            )
        )

        ,array(
            'type' => 'text'
            ,'field' => 'no_of_openings'
            ,'label' => 'No. of Openings'
            ,'columns' => 4
            ,'attributes' => array(
              'placeholder' => '3'
            )
        )

    )
));

piklist('field', array(
    'type' => 'editor'
    ,'scope' => 'post'
    ,'field' => 'post_content'
    ,'label' => 'Job Description'
    ,'options' => array (
      'wpautop' => true
      ,'media_buttons' => false
      ,'teeny' => false
      ,'dfw' => false
      ,'tinymce' => true
      ,'quicktags' => true
    )
));

piklist('field', array(
    'type' => 'select'
    ,'scope' => 'taxonomy'
    ,'field' => 'jobpost_category'
    ,'label' => 'Department'
    ,'columns' => 6
    ,'choices' => array(
        '' => 'Select Department'
      )
      + piklist(get_terms('jobpost_category', array(
        'hide_empty' => false
        ,'orderby' => 'display_name'
        ,'order' => 'asc'
      ))
      ,array(
        'term_id'
        ,'name'
      )
    )
));

piklist('field', array(
    'type' => 'select'
    ,'scope' => 'taxonomy'
    ,'field' => 'jobpost_job_type'
    ,'label' => 'Nature of job'
    ,'columns' => 6
    ,'choices' => array(
        '' => "Select Job's Nature"
      )
      + piklist(get_terms('jobpost_job_type', array(
        'hide_empty' => false
      ))
      ,array(
        'term_id'
        ,'name'
      )
    )
));

piklist('field', array(
    'type' => 'select'
    ,'scope' => 'taxonomy'
    ,'field' => 'jobpost_qualification'
    ,'label' => 'Qualification'
    ,'columns' => 6
    ,'choices' => array(
        '' => 'Select Required Qualification'
      )
      + piklist(get_terms('jobpost_qualification', array(
        'hide_empty' => false
      ))
      ,array(
        'term_id'
        ,'name'
      )
    )
));

piklist('field', array(
    'type' => 'select'
    ,'scope' => 'taxonomy'
    ,'field' => 'jobpost_experience'
    ,'label' => 'Experience'
    ,'columns' => 6
    ,'choices' => array(
        '' => 'Select Required Experience'
      )
      + piklist(get_terms('jobpost_experience', array(
        'hide_empty' => false
      ))
      ,array(
        'term_id'
        ,'name'
      )
    )
));

piklist('field', array(
    'type' => 'select'
    ,'scope' => 'taxonomy'
    ,'field' => 'jobpost_location'
    ,'label' => 'Location'
    ,'columns' => 6
    ,'choices' => array(
        '' => 'Select Location'
      )
      + piklist(get_terms('jobpost_location', array(
        'hide_empty' => false
      ))
      ,array(
        'term_id'
        ,'name'
      )
    )
));

piklist('field', array(
    'type' => 'select'
    ,'scope' => 'taxonomy'
    ,'field' => 'jobpost_ctc'
    ,'label' => 'CTC offered'
    ,'columns' => 6
    ,'choices' => array(
        '' => 'Select CTC offered'
      )
      + piklist(get_terms('jobpost_ctc', array(
        'hide_empty' => false
      ))
      ,array(
        'term_id'
        ,'name'
      )
    )
));

// piklist('field', array(
//     'type' => 'radio'
//     ,'field' => 'is_walkin'
//     ,'label' => 'Is this a walk-in interview?'
//     ,'choices' => array(
//         'hide' => 'No'
//         ,'show' => 'Yes'

//     )
//     ,'value' => 'hide'
// ));

// piklist('field', array(
//     'type' => 'group'
//     #,'label' => 'To be filled only if, this interview is a walk-in'
//     ,'list' => false
//     #,'description' => 'A grouped field. Data is not searchable, since it is saved in an array.'
//     ,'fields' => array(

//                     array(
//                         'type' => 'text'
//                         ,'field' => 'walkin_contact_person'
//                         ,'label' => __("Contact Person")
//                         ,'columns' => 6
//                     )

//                     ,array(
//                         'type' => 'text'
//                         ,'field' => 'walkin_contact_person_designation'
//                         ,'label' => __("Contact Person Designation")
//                         ,'columns' => 6
//                     )

//                     ,array(
//                         'type' => 'text'
//                         ,'field' => 'walkin_contact_no'
//                         ,'label' => __("Contact No.")
//                         ,'columns' => 6
//                     )

//                     ,array(
//                         'type' => 'text'
//                         ,'field' => 'walkin_contact_email'
//                         ,'label' => __("Contact Email")
//                         ,'columns' => 6
//                     )

//                     ,array(
//                         'type' => 'textarea'
//                         ,'field' => 'interview_venue'
//                         ,'label' => __("Interview Venue")
//                         ,'columns' => 6
//                         ,'attributes' => array(
//                            'rows' => 3
//                            #,'cols' => 5
//                            ,'class' => 'large-text'
//                         )
//                     )

//                     ,array(
//                         'type' => 'text'
//                         ,'field' => 'interview_timing'
//                         ,'label' => __("Interview Timing")
//                         ,'columns' => 6
//                     )

//     )
//     ,'conditions' => array(
//         array(
//             'field' => 'is_walkin'
//             ,'value' => 'show'
//         )
//     )
// ));

