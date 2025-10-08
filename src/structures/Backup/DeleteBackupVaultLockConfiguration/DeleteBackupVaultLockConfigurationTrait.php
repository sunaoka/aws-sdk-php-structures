<?php

namespace Sunaoka\Aws\Structures\Backup\DeleteBackupVaultLockConfiguration;

trait DeleteBackupVaultLockConfigurationTrait
{
    /**
     * @param DeleteBackupVaultLockConfigurationRequest $args
     * @return void
     */
    public function deleteBackupVaultLockConfiguration(DeleteBackupVaultLockConfigurationRequest $args)
    {
        parent::deleteBackupVaultLockConfiguration($args->toArray());
    }
}
