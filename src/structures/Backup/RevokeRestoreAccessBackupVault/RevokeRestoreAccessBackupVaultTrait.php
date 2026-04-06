<?php

namespace Sunaoka\Aws\Structures\Backup\RevokeRestoreAccessBackupVault;

trait RevokeRestoreAccessBackupVaultTrait
{
    /**
     * @param RevokeRestoreAccessBackupVaultRequest $args
     * @return void
     */
    public function revokeRestoreAccessBackupVault(RevokeRestoreAccessBackupVaultRequest $args)
    {
        parent::revokeRestoreAccessBackupVault($args->toArray());
    }
}
