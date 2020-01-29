<?php

namespace App\Security\Repository;

use App\Security\Document\RefreshToken;

interface RefreshTokenRepositoryInterface
{
    public function find(string $refreshTokenId): ?RefreshToken;

    public function save(RefreshToken $refreshToken): void;
}