<?php

return array(

    'does_not_exist' => 'Категория не существует.',
    'assoc_models'	 => 'Эта категория уже связана с одной или несколькими моделями и не может быть удалена. Пожалуйста обновите категории в моделях и повторите попытку. ',
    'assoc_items'	 => 'Эта категория связана с одним или несколькими типами активов и не может быть удалена. Пожалуйста обновите категории типов активов и повторите попытку. ',

    'create' => array(
        'error'   => 'Категория не создана, пожалуйста попробуйте снова.',
        'success' => 'Категория успешно создана.'
    ),

    'update' => array(
        'error'   => 'Категория не изменена, пожалуйста попробуйте снова',
        'success' => 'Категория успешно изменена.',
        'cannot_change_category_type'   => 'You cannot change the category type once it has been created',
    ),

    'delete' => array(
        'confirm'   => 'Вы уверены что хотите удалить категорию?',
        'error'   => 'При удалении категории возникла проблема. Пожалуйста попробуйте снова.',
        'success' => 'Категория успешно удалена.'
    )

);
