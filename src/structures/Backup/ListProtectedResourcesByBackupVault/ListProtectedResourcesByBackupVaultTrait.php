<?php

namespace Sunaoka\Aws\Structures\Backup\ListProtectedResourcesByBackupVault;

trait ListProtectedResourcesByBackupVaultTrait
{
    /**
     * @param ListProtectedResourcesByBackupVaultRequest $args
     * @return ListProtectedResourcesByBackupVaultResponse
     */
    public function listProtectedResourcesByBackupVault(ListProtectedResourcesByBackupVaultRequest $args)
    {
        $result = parent::listProtectedResourcesByBackupVault($args->toArray());
        return new ListProtectedResourcesByBackupVaultResponse($result->toArray());
    }
}
