<?php

namespace Sunaoka\Aws\Structures\Backup\DeleteBackupVaultLockConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 */
class DeleteBackupVaultLockConfigurationRequest extends Request
{
    /**
     * @param array{BackupVaultName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
