<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateClusterSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SnapshotIdentifier
 * @property string $ClusterIdentifier
 * @property \Aws\Api\DateTimeResult $SnapshotCreateTime
 * @property string $Status
 * @property int $Port
 * @property string $AvailabilityZone
 * @property \Aws\Api\DateTimeResult $ClusterCreateTime
 * @property string $MasterUsername
 * @property string $ClusterVersion
 * @property string $EngineFullVersion
 * @property string $SnapshotType
 * @property string $NodeType
 * @property int $NumberOfNodes
 * @property string $DBName
 * @property string $VpcId
 * @property bool $Encrypted
 * @property string $KmsKeyId
 * @property bool $EncryptedWithHSM
 * @property list<AccountWithRestoreAccess> $AccountsWithRestoreAccess
 * @property string $OwnerAccount
 * @property double $TotalBackupSizeInMegaBytes
 * @property double $ActualIncrementalBackupSizeInMegaBytes
 * @property double $BackupProgressInMegaBytes
 * @property double $CurrentBackupRateInMegaBytesPerSecond
 * @property int $EstimatedSecondsToCompletion
 * @property int $ElapsedTimeInSeconds
 * @property string $SourceRegion
 * @property list<Tag> $Tags
 * @property list<string> $RestorableNodeTypes
 * @property bool $EnhancedVpcRouting
 * @property string $MaintenanceTrackName
 * @property int $ManualSnapshotRetentionPeriod
 * @property int $ManualSnapshotRemainingDays
 * @property \Aws\Api\DateTimeResult $SnapshotRetentionStartTime
 * @property string $MasterPasswordSecretArn
 * @property string $MasterPasswordSecretKmsKeyId
 * @property string $SnapshotArn
 */
class Snapshot extends Shape
{
    /**
     * @param array{
     *     SnapshotIdentifier?: string,
     *     ClusterIdentifier?: string,
     *     SnapshotCreateTime?: \Aws\Api\DateTimeResult,
     *     Status?: string,
     *     Port?: int,
     *     AvailabilityZone?: string,
     *     ClusterCreateTime?: \Aws\Api\DateTimeResult,
     *     MasterUsername?: string,
     *     ClusterVersion?: string,
     *     EngineFullVersion?: string,
     *     SnapshotType?: string,
     *     NodeType?: string,
     *     NumberOfNodes?: int,
     *     DBName?: string,
     *     VpcId?: string,
     *     Encrypted?: bool,
     *     KmsKeyId?: string,
     *     EncryptedWithHSM?: bool,
     *     AccountsWithRestoreAccess?: list<AccountWithRestoreAccess>,
     *     OwnerAccount?: string,
     *     TotalBackupSizeInMegaBytes?: double,
     *     ActualIncrementalBackupSizeInMegaBytes?: double,
     *     BackupProgressInMegaBytes?: double,
     *     CurrentBackupRateInMegaBytesPerSecond?: double,
     *     EstimatedSecondsToCompletion?: int,
     *     ElapsedTimeInSeconds?: int,
     *     SourceRegion?: string,
     *     Tags?: list<Tag>,
     *     RestorableNodeTypes?: list<string>,
     *     EnhancedVpcRouting?: bool,
     *     MaintenanceTrackName?: string,
     *     ManualSnapshotRetentionPeriod?: int,
     *     ManualSnapshotRemainingDays?: int,
     *     SnapshotRetentionStartTime?: \Aws\Api\DateTimeResult,
     *     MasterPasswordSecretArn?: string,
     *     MasterPasswordSecretKmsKeyId?: string,
     *     SnapshotArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
