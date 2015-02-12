<?php

namespace League\OAuth2\Client\Provider;

use League\OAuth2\Client\Entity\User;

class Orchard extends AbstractProvider
{

    public $scopes = [];


    public function __construct($options)
    {
        parent::__construct($options);
    }

    public function urlAuthorize()
    {
        return 'http://api.theorchard.com/api/oauth/authorize';
    }

    public function urlAccessToken()
    {
        return 'http://api.theorchard.com/api/access_token';
    }

    public function urlUserDetails(\League\OAuth2\Client\Token\AccessToken $token)
    {
    }

    public function userDetails($response, \League\OAuth2\Client\Token\AccessToken $token)
    {
    }

    public function userUid($response, \League\OAuth2\Client\Token\AccessToken $token)
    {
    }

    public function userEmail($response, \League\OAuth2\Client\Token\AccessToken $token)
    {
    }

    public function userScreenName($response, \League\OAuth2\Client\Token\AccessToken $token)
    {
    }
}
