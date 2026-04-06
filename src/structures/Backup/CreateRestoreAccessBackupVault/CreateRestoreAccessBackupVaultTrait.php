<?php

namespace Sunaoka\Aws\Structures\Backup\CreateRestoreAccessBackupVault;

trait CreateRestoreAccessBackupVaultTrait
{
    /**
     * @param CreateRestoreAccessBackupVaultRequest $args
     * @return CreateRestoreAccessBackupVaultResponse
     */
    public function createRestoreAccessBackupVault(CreateRestoreAccessBackupVaultRequest $args)
    {
        $result = parent::createRestoreAccessBackupVault($args->toArray());
        return new CreateRestoreAccessBackupVaultResponse($result->toArray());
    }
}
