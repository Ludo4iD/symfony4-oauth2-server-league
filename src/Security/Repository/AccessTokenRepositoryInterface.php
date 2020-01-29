<?php

namespace App\Security\Repository;

use App\Security\Document\AccessToken;

interface AccessTokenRepositoryInterface
{
    public function find(string $accessTokenId): ?AccessToken;

    public function save(AccessToken $accessToken): void;
}