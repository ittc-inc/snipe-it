<?php

return [

    'undeployable' 		 => '<strong>Warning: </strong> This asset has been marked as currently undeployable. If this status has changed, please update the asset status.',
    'does_not_exist' 	 => 'Majetok neexistuje.',
    'does_not_exist_var' => 'Asset with tag :asset_tag not found.',
    'no_tag' 	         => 'No asset tag provided.',
    'does_not_exist_or_not_requestable' => 'That asset does not exist or is not requestable.',
    'assoc_users'	 	 => 'Tento majetok je práve priradený používateľovi, preto nemôže byť odstránený. Prosim najprv odoberte majetok používateľovi, následne skúste znovu. ',
    'warning_audit_date_mismatch' 	=> 'This asset\'s next audit date (:next_audit_date) is before the last audit date (:last_audit_date). Please update the next audit date.',
    'labels_generated'   => 'Labels were successfully generated.',
    'error_generating_labels' => 'Error while generating labels.',
    'no_assets_selected' => 'No assets selected.',

    'create' => [
        'error'   		=> 'Majetok nebol vytvorený, prosím skúste znovu. :(',
        'success' 		=> 'Majetok bol úspešne vytvorený. :)',
        'success_linked' => 'Asset with tag :tag was created successfully. <strong><a href=":link" style="color: white;">Click here to view</a></strong>.',
        'multi_success_linked' => 'Asset with tag :links was created successfully.|:count assets were created succesfully. :links.',
        'partial_failure' => 'An asset was unable to be created. Reason: :failures|:count assets were unable to be created. Reasons: :failures',
    ],

    'update' => [
        'error'   			=> 'Majetok sa nepodarilo upraviť, skúste prosím znovu',
        'success' 			=> 'Majetok bol úspešne upravený.',
        'encrypted_warning' => 'Asset updated successfully, but encrypted custom fields were not due to permissions',
        'nothing_updated'	=>  'Neboli vybrané žiadne položky, preto nebolo nič upravené.',
        'no_assets_selected'  =>  'No assets were selected, so nothing was updated.',
        'assets_do_not_exist_or_are_invalid' => 'Selected assets cannot be updated.',
    ],

    'restore' => [
        'error'   		=> 'Majetok nebol obnovený, prosím skúste znovu',
        'success' 		=> 'Majetok bol úspešne obnovený.',
        'bulk_success' 		=> 'Majetok bol úspešne obnovený.',
        'nothing_updated'   => 'No assets were selected, so nothing was restored.', 
    ],

    'audit' => [
        'error'   		=> 'Asset audit unsuccessful: :error ',
        'success' 		=> 'Audit majetko bol úspešne zaznamenaný.',
    ],


    'deletefile' => [
        'error'   => 'Súbor nebol odstránený. Prosím skúste znovu.',
        'success' => 'Súbor bol úspešne odstránený.',
    ],

    'upload' => [
        'error'   => 'Súbor(y) sa nepodarilo nahrať. Skúste prosím znovu.',
        'success' => 'Súbor(y) boli úspešne uložené.',
        'nofiles' => 'Nevybrali ste žiadne súbory na nahranie alebo je súbor, ktorý sa pokúšate nahrať, príliš veľký',
        'invalidfiles' => 'Jeden alebo viac súborov je príliš veľký alebo ide o typ súboru, ktorý nie je povolený. Povolené typy súborov sú png, gif, jpg, doc, docx, pdf a txt.',
    ],

    'import' => [
        'import_button'         => 'Process Import',
        'error'                 => 'Niektoré položky neboli správne naimportované.',
        'errorDetail'           => 'Nasledujúce položky neboli kvôli chybám importované.',
        'success'               => 'Súbor bol naimportovaný',
        'file_delete_success'   => 'Súbor bol úspešné odstránený',
        'file_delete_error'      => 'Súbor sa nepodarilo odstrániť',
        'file_missing' => 'The file selected is missing',
        'file_already_deleted' => 'The file selected was already deleted',
        'header_row_has_malformed_characters' => 'One or more attributes in the header row contain malformed UTF-8 characters',
        'content_row_has_malformed_characters' => 'One or more attributes in the first row of content contain malformed UTF-8 characters',
    ],


    'delete' => [
        'confirm'   	=> 'Ste si istý, že chcete odstrániť tento majetok?',
        'error'   		=> 'Pri odstraňovaní majetku sa vyskytla chyba. Skúste prosím znovu.',
        'nothing_updated'   => 'Neboli zvolený žiaden majetok, preto nebolo nič odstránené.',
        'success' 		=> 'Majetok bol úspešne odstránený.',
    ],

    'checkout' => [
        'error'   		=> 'Majetok sa nepodarilo priradiť, skúste prosím znovu',
        'success' 		=> 'Majetok bol úspešne priradený.',
        'user_does_not_exist' => 'Tento užívateľ nie je platný. Prosím skúste znovu.',
        'not_available' => 'Tento majetok nie je k dospozícii pre priradenie!',
        'no_assets_selected' => 'Musíte vybrať najmenej jednu položku majetku zo zoznamu',
    ],

    'multi-checkout' => [
        'error'   => 'Asset was not checked out, please try again|Assets were not checked out, please try again',
        'success' => 'Asset checked out successfully.|Assets checked out successfully.',
    ],

    'checkin' => [
        'error'   		=> 'Majetok sa nepodarilo prijať, skúste prosím znovu',
        'success' 		=> 'Majetok bol úspešne prijatý.',
        'user_does_not_exist' => 'Tento užívateľ nie je platný. Prosím skúste znovu.',
        'already_checked_in'  => 'Tento majetok je už prevzatý.',

    ],

    'requests' => [
        'error'   		=> 'Majetok nebol vyžiadaný, prosím skúste znovu',
        'success' 		=> 'Majetok úspešne vyžiadaný.',
        'canceled'      => 'Požiadavka na priradenie bola úspešne zrušená',
    ],

];
