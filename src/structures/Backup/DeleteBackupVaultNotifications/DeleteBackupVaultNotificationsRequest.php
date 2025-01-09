<?php

namespace Sunaoka\Aws\Structures\Backup\DeleteBackupVaultNotifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 */
class DeleteBackupVaultNotificationsRequest extends Request
{
    /**
     * @param array{BackupVaultName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
