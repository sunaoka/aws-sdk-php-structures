<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BackupVaultArn
 * @property string $BackupVaultName
 * @property string $EncryptionKeyArn
 * @property AwsBackupBackupVaultNotificationsDetails $Notifications
 * @property string $AccessPolicy
 */
class AwsBackupBackupVaultDetails extends Shape
{
    /**
     * @param array{
     *     BackupVaultArn?: string,
     *     BackupVaultName?: string,
     *     EncryptionKeyArn?: string,
     *     Notifications?: AwsBackupBackupVaultNotificationsDetails,
     *     AccessPolicy?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
