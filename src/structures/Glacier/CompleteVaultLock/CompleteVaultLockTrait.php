<?php

namespace Sunaoka\Aws\Structures\Glacier\CompleteVaultLock;

trait CompleteVaultLockTrait
{
    /**
     * @param CompleteVaultLockRequest $args
     * @return void
     */
    public function completeVaultLock(CompleteVaultLockRequest $args)
    {
        parent::completeVaultLock($args->toArray());
    }
}
