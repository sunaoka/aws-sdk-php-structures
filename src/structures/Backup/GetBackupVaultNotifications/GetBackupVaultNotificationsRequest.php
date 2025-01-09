<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupVaultNotifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 */
class GetBackupVaultNotificationsRequest extends Request
{
    /**
     * @param array{BackupVaultName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
