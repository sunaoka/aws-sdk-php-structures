<?php

namespace Sunaoka\Aws\Structures\Backup\RevokeRestoreAccessBackupVault;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 * @property string $RestoreAccessBackupVaultArn
 * @property string|null $RequesterComment
 */
class RevokeRestoreAccessBackupVaultRequest extends Request
{
    /**
     * @param array{
     *     BackupVaultName: string,
     *     RestoreAccessBackupVaultArn: string,
     *     RequesterComment?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
