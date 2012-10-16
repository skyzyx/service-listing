<?php
/**
 * This is the file to edit if you want to add support for a new service
 * description. This is compiled into JSON and the previous JSON document will
 * be overwritten.
 */

return array(
    array(
        'long' => 'App.net',
        'short' => array('adn'),
        'uri' => 'https://alpha.app.net/{user}'
    ),
    array(
        'long' => 'BitBucket',
        'short' => array('bitbucket'),
        'uri' => 'https://bitbucket.org/{user}'
    ),
    array(
        'long' => 'CodePlex',
        'short' => array('codeplex'),
        'uri' => 'http://www.codeplex.com/site/users/view/{user}'
    ),
    array(
        'long' => 'Facebook',
        'short' => array('facebook', 'fb'),
        'uri' => 'http://facebook.com/{user}'
    ),
    array(
        'long' => 'Flickr',
        'short' => array('flickr'),
        'uri' => 'http://flickr.com/people/{user}'
    ),
    array(
        'long' => 'Google+',
        'short' => array('g+', 'google'),
        'uri' => 'http://profile.google.com/{user}'
    ),
    array(
        'long' => 'GitHub',
        'short' => array('github'),
        'uri' => 'http://github.com/{user}'
    ),
    array(
        'long' => 'Gravatar',
        'short' => array('gravatar'),
        'uri' => 'http://en.gravatar.com/avatar/{user}?s=200&r=any'
    ),
    array(
        'long' => 'Last.fm',
        'short' => array('lastfm'),
        'uri' => 'http://www.last.fm/user/{user}'
    ),
    array(
        'long' => 'Playstation Network',
        'short' => array('playstation', 'ps3', 'psn'),
        'uri' => 'http://us.playstation.com/playstation/psn/visit/profiles/{user}'
    ),
    array(
        'long' => 'Rdio',
        'short' => array('rdio'),
        'uri' => 'http://www.rdio.com/people/{user}/'
    ),
    array(
        'long' => 'Twitter',
        'short' => array('', 'twitter'),
        'uri' => 'http://twitter.com/{user}'
    ),
    array(
        'long' => 'Xbox Live',
        'short' => array('xbox'),
        'uri' => 'https://live.xbox.com/en-US/Profile?gamertag={user}'
    ),
    array(
        'long' => 'YouTube',
        'short' => array('youtube', 'yt'),
        'uri' => 'http://youtube.com/{user}'
    ),
);
