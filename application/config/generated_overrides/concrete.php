<?php

/**
 * -----------------------------------------------------------------------------
 * Generated 2015-05-25T11:24:08+02:00
 *
 * @item      user.registration.type
 * @group     concrete
 * @namespace null
 * -----------------------------------------------------------------------------
 */
return array(
    'locale' => 'pl_PL',
    'site' => 'Free Surf Zone',
    'version_installed' => '5.7.4.2',
    'misc' => array(
        'access_entity_updated' => 1432242671,
        'latest_version' => '5.7.4.2',
        'do_page_reindex_check' => false
    ),
    'user' => array(
        'profiles_enabled' => true,
        'gravatar' => array(
            'enabled' => true,
            'max_level' => 'g',
            'image_set' => '404'
        ),
        'registration' => array(
            'email_registration' => false,
            'type' => 'validate_email',
            'captcha' => true,
            'enabled' => true,
            'validate_email' => true,
            'approval' => false,
            'notification' => '1',
            'notification_email' => 'dudeostrowski@gmail.com'
        )
    )
);
