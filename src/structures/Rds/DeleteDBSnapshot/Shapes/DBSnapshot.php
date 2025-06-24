<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBSnapshotIdentifier
 * @property string|null $DBInstanceIdentifier
 * @property \Aws\Api\DateTimeResult|null $SnapshotCreateTime
 * @property string|null $Engine
 * @property int|null $AllocatedStorage
 * @property string|null $Status
 * @property int|null $Port
 * @property string|null $AvailabilityZone
 * @property string|null $VpcId
 * @property \Aws\Api\DateTimeResult|null $InstanceCreateTime
 * @property string|null $MasterUsername
 * @property string|null $EngineVersion
 * @property string|null $LicenseModel
 * @property string|null $SnapshotType
 * @property int|null $Iops
 * @property string|null $OptionGroupName
 * @property int|null $PercentProgress
 * @property string|null $SourceRegion
 * @property string|null $SourceDBSnapshotIdentifier
 * @property string|null $StorageType
 * @property string|null $TdeCredentialArn
 * @property bool|null $Encrypted
 * @property string|null $KmsKeyId
 * @property string|null $DBSnapshotArn
 * @property string|null $Timezone
 * @property bool|null $IAMDatabaseAuthenticationEnabled
 * @property list<ProcessorFeature>|null $ProcessorFeatures
 * @property string|null $DbiResourceId
 * @property list<Tag>|null $TagList
 * @property \Aws\Api\DateTimeResult|null $OriginalSnapshotCreateTime
 * @property \Aws\Api\DateTimeResult|null $SnapshotDatabaseTime
 * @property string|null $SnapshotTarget
 * @property int|null $StorageThroughput
 * @property string|null $DBSystemId
 * @property bool|null $DedicatedLogVolume
 * @property bool|null $MultiTenant
 * @property string|null $SnapshotAvailabilityZone
 */
class DBSnapshot extends Shape
{
    /**
     * @param array{
     *     DBSnapshotIdentifier?: string|null,
     *     DBInstanceIdentifier?: string|null,
     *     SnapshotCreateTime?: \Aws\Api\DateTimeResult|null,
     *     Engine?: string|null,
     *     AllocatedStorage?: int|null,
     *     Status?: string|null,
     *     Port?: int|null,
     *     AvailabilityZone?: string|null,
     *     VpcId?: string|null,
     *     InstanceCreateTime?: \Aws\Api\DateTimeResult|null,
     *     MasterUsername?: string|null,
     *     EngineVersion?: string|null,
     *     LicenseModel?: string|null,
     *     SnapshotType?: string|null,
     *     Iops?: int|null,
     *     OptionGroupName?: string|null,
     *     PercentProgress?: int|null,
     *     SourceRegion?: string|null,
     *     SourceDBSnapshotIdentifier?: string|null,
     *     StorageType?: string|null,
     *     TdeCredentialArn?: string|null,
     *     Encrypted?: bool|null,
     *     KmsKeyId?: string|null,
     *     DBSnapshotArn?: string|null,
     *     Timezone?: string|null,
     *     IAMDatabaseAuthenticationEnabled?: bool|null,
     *     ProcessorFeatures?: list<ProcessorFeature>|null,
     *     DbiResourceId?: string|null,
     *     TagList?: list<Tag>|null,
     *     OriginalSnapshotCreateTime?: \Aws\Api\DateTimeResult|null,
     *     SnapshotDatabaseTime?: \Aws\Api\DateTimeResult|null,
     *     SnapshotTarget?: string|null,
     *     StorageThroughput?: int|null,
     *     DBSystemId?: string|null,
     *     DedicatedLogVolume?: bool|null,
     *     MultiTenant?: bool|null,
     *     SnapshotAvailabilityZone?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
