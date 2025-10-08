<?php

namespace Sunaoka\Aws\Structures\Glacier\GetVaultLock;

trait GetVaultLockTrait
{
    /**
     * @param GetVaultLockRequest $args
     * @return GetVaultLockResponse
     */
    public function getVaultLock(GetVaultLockRequest $args)
    {
        $result = parent::getVaultLock($args->toArray());
        return new GetVaultLockResponse($result->toArray());
    }
}
