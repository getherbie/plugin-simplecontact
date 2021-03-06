<?php

return [
    'apiVersion' => 2,
    'pluginName' => 'simplecontact',
    'pluginPath' => __DIR__,
    'template' => '@plugin/simplecontact/templates/form.twig',
    'formConfig' => [
        'subject' => 'Kontaktanfrage',
        'recipient' => 'me@example.com',
        'fields' => [
            'name' => [
                'label' => 'Dein Name',
                'placeholder' => '',
            ],
            'email' => [
                'label' => 'Deine E-Mail',
                'placeholder' => '',
            ],
            'message' => [
                'label' => 'Deine Nachricht',
                'placeholder' => '',
            ],
            'antispam' => [
                'label' => 'Antispam',
                'placeholder' => '',
            ],
            'submit' => [
                'label' => 'Formular absenden'
            ],
        ],
        'messages' => [
            'success' => 'Vielen Dank! Deine Nachricht wurde versendet.',
            'error' => 'Uups! Da gibt\'s ein Problem. Bitte vervollständige das Formular und probier\s nochmal.',
            'fail' => 'Uups! Etwas ist schief gegangen. Die Nachricht konnte nicht übermittelt werden.'
        ],
        'errors' => [
            'empty_field' => 'Dies ist ein Pflichtfeld',
            'invalid_email' => 'Die eingegebene E-Mail ist ungültig'
        ]
    ],
    'usePageCache' => false,
    'intValue' => 23,
    'floatValue' => 0.23,
];
