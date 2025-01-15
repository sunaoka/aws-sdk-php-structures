<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyClusterSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SnapshotIdentifier
 * @property string|null $ClusterIdentifier
 * @property \Aws\Api\DateTimeResult|null $SnapshotCreateTime
 * @property string|null $Status
 * @property int|null $Port
 * @property string|null $AvailabilityZone
 * @property \Aws\Api\DateTimeResult|null $ClusterCreateTime
 * @property string|null $MasterUsername
 * @property string|null $ClusterVersion
 * @property string|null $EngineFullVersion
 * @property string|null $SnapshotType
 * @property string|null $NodeType
 * @property int|null $NumberOfNodes
 * @property string|null $DBName
 * @property string|null $VpcId
 * @property bool|null $Encrypted
 * @property string|null $KmsKeyId
 * @property bool|null $EncryptedWithHSM
 * @property list<AccountWithRestoreAccess>|null $AccountsWithRestoreAccess
 * @property string|null $OwnerAccount
 * @property double|null $TotalBackupSizeInMegaBytes
 * @property double|null $ActualIncrementalBackupSizeInMegaBytes
 * @property double|null $BackupProgressInMegaBytes
 * @property double|null $CurrentBackupRateInMegaBytesPerSecond
 * @property int|null $EstimatedSecondsToCompletion
 * @property int|null $ElapsedTimeInSeconds
 * @property string|null $SourceRegion
 * @property list<Tag>|null $Tags
 * @property list<string>|null $RestorableNodeTypes
 * @property bool|null $EnhancedVpcRouting
 * @property string|null $MaintenanceTrackName
 * @property int|null $ManualSnapshotRetentionPeriod
 * @property int|null $ManualSnapshotRemainingDays
 * @property \Aws\Api\DateTimeResult|null $SnapshotRetentionStartTime
 * @property string|null $MasterPasswordSecretArn
 * @property string|null $MasterPasswordSecretKmsKeyId
 * @property string|null $SnapshotArn
 */
class Snapshot extends Shape
{
    /**
     * @param array{
     *     SnapshotIdentifier?: string|null,
     *     ClusterIdentifier?: string|null,
     *     SnapshotCreateTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: string|null,
     *     Port?: int|null,
     *     AvailabilityZone?: string|null,
     *     ClusterCreateTime?: \Aws\Api\DateTimeResult|null,
     *     MasterUsername?: string|null,
     *     ClusterVersion?: string|null,
     *     EngineFullVersion?: string|null,
     *     SnapshotType?: string|null,
     *     NodeType?: string|null,
     *     NumberOfNodes?: int|null,
     *     DBName?: string|null,
     *     VpcId?: string|null,
     *     Encrypted?: bool|null,
     *     KmsKeyId?: string|null,
     *     EncryptedWithHSM?: bool|null,
     *     AccountsWithRestoreAccess?: list<AccountWithRestoreAccess>|null,
     *     OwnerAccount?: string|null,
     *     TotalBackupSizeInMegaBytes?: double|null,
     *     ActualIncrementalBackupSizeInMegaBytes?: double|null,
     *     BackupProgressInMegaBytes?: double|null,
     *     CurrentBackupRateInMegaBytesPerSecond?: double|null,
     *     EstimatedSecondsToCompletion?: int|null,
     *     ElapsedTimeInSeconds?: int|null,
     *     SourceRegion?: string|null,
     *     Tags?: list<Tag>|null,
     *     RestorableNodeTypes?: list<string>|null,
     *     EnhancedVpcRouting?: bool|null,
     *     MaintenanceTrackName?: string|null,
     *     ManualSnapshotRetentionPeriod?: int|null,
     *     ManualSnapshotRemainingDays?: int|null,
     *     SnapshotRetentionStartTime?: \Aws\Api\DateTimeResult|null,
     *     MasterPasswordSecretArn?: string|null,
     *     MasterPasswordSecretKmsKeyId?: string|null,
     *     SnapshotArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
