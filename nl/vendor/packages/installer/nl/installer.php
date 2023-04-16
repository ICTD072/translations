<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'Installatie',
    'next' => 'Volgende stap',
    'back' => 'Vorige',
    'finish' => 'Installeren',
    'forms' => [
        'errorTitle' => 'De volgende fouten zijn opgetreden:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'templateTitle' => 'Welkom',
        'title' => 'Welkom',
        'message' => 'Voordat we aan de slag gaan, hebben we wat informatie over de database nodig. U moet de volgende items kennen voordat u verder gaat.',
        'next' => 'Aan de slag',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'templateTitle' => 'Stap 1 | Serververeisten',
        'title' => 'Serververeisten',
        'next' => 'Controleer machtigingen',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'templateTitle' => 'Stap 2 | Machtigingen',
        'title' => 'Machtigingen',
        'next' => 'Omgeving configureren',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'wizard' => [
            'templateTitle' => 'Omgevingsinstellingen',
            'title' => 'Omgevingsinstellingen',
            'form' => [
                'name_required' => 'Een omgevingsnaam is vereist.',
                'app_name_label' => 'Site titel',
                'app_name_placeholder' => 'Site titel',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'Database-verbinding',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Database host',
                'db_host_placeholder' => 'Database host',
                'db_port_label' => 'Database poort',
                'db_port_placeholder' => 'Database poort',
                'db_name_label' => 'Database naam',
                'db_name_placeholder' => 'Database naam',
                'db_username_label' => 'Database gebruikersnaam',
                'db_username_placeholder' => 'Database gebruikersnaam',
                'db_password_label' => 'Database wachtwoord',
                'db_password_placeholder' => 'Database wachtwoord',
                'buttons' => [
                    'install' => 'Installeren',
                ],
            ],
        ],
        'success' => 'Uw .env bestandsinstellingen zijn opgeslagen.',
        'errors' => 'Kan het .env bestand niet opslaan. Maak het handmatig aan.',
    ],

    'install' => 'Installeren',

    'final' => [
        'title' => 'Installatie voltooid',
        'templateTitle' => 'Installatie voltooid',
        'finished' => 'Applicatie is succesvol geïnstalleerd.',
        'exit' => 'Klik hier om af te sluiten',
    ],
    'create_account' => 'Account aanmaken',
    'first_name' => 'Voornaam',
    'last_name' => 'Achternaam',
    'username' => 'Gebruikersnaam',
    'email' => 'E-mail',
    'password' => 'Wachtwoord',
    'password_confirmation' => 'Wachtwoord bevestiging',
    'create' => 'Aanmaken',
    'install_success' => 'Succesvol geïnstalleerd!',
];
