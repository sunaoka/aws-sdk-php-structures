<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $accountsWithProvisionedRestoreAccess
 * @property list<string> $accountsWithRestoreAccess
 * @property double $actualIncrementalBackupSizeInMegaBytes
 * @property string $adminPasswordSecretArn
 * @property string $adminPasswordSecretKmsKeyId
 * @property string $adminUsername
 * @property double $backupProgressInMegaBytes
 * @property double $currentBackupRateInMegaBytesPerSecond
 * @property int $elapsedTimeInSeconds
 * @property int $estimatedSecondsToCompletion
 * @property string $kmsKeyId
 * @property string $namespaceArn
 * @property string $namespaceName
 * @property string $ownerAccount
 * @property string $snapshotArn
 * @property \Aws\Api\DateTimeResult $snapshotCreateTime
 * @property string $snapshotName
 * @property int $snapshotRemainingDays
 * @property int $snapshotRetentionPeriod
 * @property \Aws\Api\DateTimeResult $snapshotRetentionStartTime
 * @property 'AVAILABLE'|'CREATING'|'DELETED'|'CANCELLED'|'FAILED'|'COPYING' $status
 * @property double $totalBackupSizeInMegaBytes
 */
class Snapshot extends Shape
{
    /**
     * @param array{
     *     accountsWithProvisionedRestoreAccess?: list<string>,
     *     accountsWithRestoreAccess?: list<string>,
     *     actualIncrementalBackupSizeInMegaBytes?: double,
     *     adminPasswordSecretArn?: string,
     *     adminPasswordSecretKmsKeyId?: string,
     *     adminUsername?: string,
     *     backupProgressInMegaBytes?: double,
     *     currentBackupRateInMegaBytesPerSecond?: double,
     *     elapsedTimeInSeconds?: int,
     *     estimatedSecondsToCompletion?: int,
     *     kmsKeyId?: string,
     *     namespaceArn?: string,
     *     namespaceName?: string,
     *     ownerAccount?: string,
     *     snapshotArn?: string,
     *     snapshotCreateTime?: \Aws\Api\DateTimeResult,
     *     snapshotName?: string,
     *     snapshotRemainingDays?: int,
     *     snapshotRetentionPeriod?: int,
     *     snapshotRetentionStartTime?: \Aws\Api\DateTimeResult,
     *     status?: 'AVAILABLE'|'CREATING'|'DELETED'|'CANCELLED'|'FAILED'|'COPYING',
     *     totalBackupSizeInMegaBytes?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
