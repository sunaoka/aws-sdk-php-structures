<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BackupVaultArn
 * @property string|null $BackupVaultName
 * @property string|null $EncryptionKeyArn
 * @property AwsBackupBackupVaultNotificationsDetails|null $Notifications
 * @property string|null $AccessPolicy
 */
class AwsBackupBackupVaultDetails extends Shape
{
    /**
     * @param array{
     *     BackupVaultArn?: string|null,
     *     BackupVaultName?: string|null,
     *     EncryptionKeyArn?: string|null,
     *     Notifications?: AwsBackupBackupVaultNotificationsDetails|null,
     *     AccessPolicy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
