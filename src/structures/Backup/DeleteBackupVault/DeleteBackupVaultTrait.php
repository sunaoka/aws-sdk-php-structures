<?php

namespace Sunaoka\Aws\Structures\Backup\DeleteBackupVault;

trait DeleteBackupVaultTrait
{
    /**
     * @param DeleteBackupVaultRequest $args
     * @return void
     */
    public function deleteBackupVault(DeleteBackupVaultRequest $args)
    {
        parent::deleteBackupVault($args->toArray());
    }
}
