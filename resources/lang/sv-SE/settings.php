<?php

return [

    'company' => [
        'name'              => 'Namn',
        'email'             => 'E-post',
        'phone'             => 'Telefon',
        'address'           => 'Adress',
        'logo'              => 'Logotyp',
    ],
    'localisation' => [
        'tab'               => 'Plats',
        'date' => [
            'format'        => 'Datumformat',
            'separator'     => 'Datumavgränsare',
            'dash'          => 'Bindestreck (-)',
            'dot'           => 'Punkt (.)',
            'comma'         => 'Kommatecken ()',
            'slash'         => 'Snedstreck (/)',
            'space'         => 'Mellanslag ( )',
        ],
        'timezone'          => 'Tidszon',
        'percent' => [
            'title'         => 'Procent (%) Ställning',
            'before'        => 'Innan nummret',
            'after'         => 'Efter nummret',
        ],
    ],
    'invoice' => [
        'tab'               => 'Faktura',
        'prefix'            => 'Nummerprefix',
        'digit'             => 'Siffra',
        'next'              => 'Nästa nummer',
        'logo'              => 'Logotyp',
    ],
    'default' => [
        'tab'               => 'Huvudsakligt',
        'account'           => 'Huvudsakligt Konto',
        'currency'          => 'Huvudsaklig valuta',
        'tax'               => 'Huvudsaklig skattesats',
        'payment'           => 'Huvudsaklig betalningsmetod',
        'language'          => 'Huvudspråk',
    ],
    'email' => [
        'protocol'          => 'Protokoll',
        'php'               => 'PHP Mail',
        'smtp' => [
            'name'          => 'SMTP',
            'host'          => 'SMTP Server',
            'port'          => 'SMTP Port',
            'username'      => 'SMTP Användarnamn',
            'password'      => 'SMTP Lösenord',
            'encryption'    => 'SMTP Säkerhet',
            'none'          => 'Ingen',
        ],
        'sendmail'          => 'Sendmail',
        'sendmail_path'     => 'Sökväg för Sendmail',
        'log'               => 'Logga e-post',
    ],
    'scheduling' => [
        'tab'               => 'Schemaläggning',
        'send_invoice'      => 'Skicka faktura påminnelse',
        'invoice_days'      => 'Skicka efter förfallodagar',
        'send_bill'         => 'Skicka faktura påminnelse',
        'bill_days'         => 'Skicka innan förfallodatum',
        'cron_command'      => 'Cron Kommando',
        'schedule_time'     => 'Tid att köra',
    ],
    'appearance' => [
        'tab'               => 'Utseende',
        'theme'             => 'Tema',
        'light'             => 'Ljust',
        'dark'              => 'Mörkt',
        'list_limit'        => 'Poster Per sida',
        'use_gravatar'      => 'Använda Gravatar',
    ],
    'system' => [
        'tab'               => 'System',
        'session' => [
            'lifetime'      => 'Session-livstid (minuter)',
            'handler'       => 'Sessionshanterare',
            'file'          => 'Fil',
            'database'      => 'Databas',
        ],
        'file_size'         => 'Max filstorlek (MB)',
        'file_types'        => 'Tillåtna filtyper',
    ],

];
