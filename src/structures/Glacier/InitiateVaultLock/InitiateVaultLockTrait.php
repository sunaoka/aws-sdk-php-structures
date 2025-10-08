<?php

namespace Sunaoka\Aws\Structures\Glacier\InitiateVaultLock;

trait InitiateVaultLockTrait
{
    /**
     * @param InitiateVaultLockRequest $args
     * @return InitiateVaultLockResponse
     */
    public function initiateVaultLock(InitiateVaultLockRequest $args)
    {
        $result = parent::initiateVaultLock($args->toArray());
        return new InitiateVaultLockResponse($result->toArray());
    }
}
