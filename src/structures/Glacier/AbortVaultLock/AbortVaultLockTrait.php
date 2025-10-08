<?php

namespace Sunaoka\Aws\Structures\Glacier\AbortVaultLock;

trait AbortVaultLockTrait
{
    /**
     * @param AbortVaultLockRequest $args
     * @return void
     */
    public function abortVaultLock(AbortVaultLockRequest $args)
    {
        parent::abortVaultLock($args->toArray());
    }
}
