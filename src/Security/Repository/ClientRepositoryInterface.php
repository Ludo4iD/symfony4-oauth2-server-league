<?php

namespace App\Security\Repository;

use App\Security\Document\Client;

interface ClientRepositoryInterface
{
    public function findActive(string $clientId): ?Client;
}