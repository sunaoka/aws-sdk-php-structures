<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\DeleteSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $accountsWithProvisionedRestoreAccess
 * @property list<string>|null $accountsWithRestoreAccess
 * @property double|null $actualIncrementalBackupSizeInMegaBytes
 * @property string|null $adminPasswordSecretArn
 * @property string|null $adminPasswordSecretKmsKeyId
 * @property string|null $adminUsername
 * @property double|null $backupProgressInMegaBytes
 * @property double|null $currentBackupRateInMegaBytesPerSecond
 * @property int|null $elapsedTimeInSeconds
 * @property int|null $estimatedSecondsToCompletion
 * @property string|null $kmsKeyId
 * @property string|null $namespaceArn
 * @property string|null $namespaceName
 * @property string|null $ownerAccount
 * @property string|null $snapshotArn
 * @property \Aws\Api\DateTimeResult|null $snapshotCreateTime
 * @property string|null $snapshotName
 * @property int|null $snapshotRemainingDays
 * @property int|null $snapshotRetentionPeriod
 * @property \Aws\Api\DateTimeResult|null $snapshotRetentionStartTime
 * @property 'AVAILABLE'|'CREATING'|'DELETED'|'CANCELLED'|'FAILED'|'COPYING'|null $status
 * @property double|null $totalBackupSizeInMegaBytes
 */
class Snapshot extends Shape
{
    /**
     * @param array{
     *     accountsWithProvisionedRestoreAccess?: list<string>|null,
     *     accountsWithRestoreAccess?: list<string>|null,
     *     actualIncrementalBackupSizeInMegaBytes?: double|null,
     *     adminPasswordSecretArn?: string|null,
     *     adminPasswordSecretKmsKeyId?: string|null,
     *     adminUsername?: string|null,
     *     backupProgressInMegaBytes?: double|null,
     *     currentBackupRateInMegaBytesPerSecond?: double|null,
     *     elapsedTimeInSeconds?: int|null,
     *     estimatedSecondsToCompletion?: int|null,
     *     kmsKeyId?: string|null,
     *     namespaceArn?: string|null,
     *     namespaceName?: string|null,
     *     ownerAccount?: string|null,
     *     snapshotArn?: string|null,
     *     snapshotCreateTime?: \Aws\Api\DateTimeResult|null,
     *     snapshotName?: string|null,
     *     snapshotRemainingDays?: int|null,
     *     snapshotRetentionPeriod?: int|null,
     *     snapshotRetentionStartTime?: \Aws\Api\DateTimeResult|null,
     *     status?: 'AVAILABLE'|'CREATING'|'DELETED'|'CANCELLED'|'FAILED'|'COPYING'|null,
     *     totalBackupSizeInMegaBytes?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
