<?php

namespace Sunaoka\Aws\Structures\Backup\PutBackupVaultLockConfiguration;

trait PutBackupVaultLockConfigurationTrait
{
    /**
     * @param PutBackupVaultLockConfigurationRequest $args
     * @return void
     */
    public function putBackupVaultLockConfiguration(PutBackupVaultLockConfigurationRequest $args)
    {
        parent::putBackupVaultLockConfiguration($args->toArray());
    }
}
