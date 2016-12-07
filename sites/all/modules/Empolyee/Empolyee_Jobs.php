<?php

/**
 * Created by PhpStorm.
 * User: osamamohsen
 * Date: 07/12/16
 * Time: 01:36 م
 */
class Empolyee_Jobs
{
    function empolyee_showmyempolyees(){


        $form = array();
        $result = db_query("select title,field_job_value,field_age_value from node as n
						INNER JOIN field_data_field_job as j
						ON n.nid = j.entity_id
						INNER JOIN field_data_field_age as a
						ON j.entity_id = a.entity_id WHERE n.type = 'empolyee'");
        if($result->rowCount()>0){

            $header = array("Name","Job","Age");
            foreach ($result as $res){
                $rows [] =array(
                    $res->title,
                    $res->field_job_value,
                    $res->field_age_value
                );
            }
            $output = theme('table',array('header'=>$header,'rows'=>$rows));
            $form['#suffix'] = "<div>$output</div>";
            return array($form);
//		echo $output;
        }else{
            drupal_set_message("No Empolyees in your Company");
        }

    }
}