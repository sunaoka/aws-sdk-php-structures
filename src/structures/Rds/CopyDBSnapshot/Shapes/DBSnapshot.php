<?php

namespace Sunaoka\Aws\Structures\Rds\CopyDBSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DBSnapshotIdentifier
 * @property string $DBInstanceIdentifier
 * @property \Aws\Api\DateTimeResult $SnapshotCreateTime
 * @property string $Engine
 * @property int $AllocatedStorage
 * @property string $Status
 * @property int $Port
 * @property string $AvailabilityZone
 * @property string $VpcId
 * @property \Aws\Api\DateTimeResult $InstanceCreateTime
 * @property string $MasterUsername
 * @property string $EngineVersion
 * @property string $LicenseModel
 * @property string $SnapshotType
 * @property int $Iops
 * @property string $OptionGroupName
 * @property int $PercentProgress
 * @property string $SourceRegion
 * @property string $SourceDBSnapshotIdentifier
 * @property string $StorageType
 * @property string $TdeCredentialArn
 * @property bool $Encrypted
 * @property string $KmsKeyId
 * @property string $DBSnapshotArn
 * @property string $Timezone
 * @property bool $IAMDatabaseAuthenticationEnabled
 * @property list<ProcessorFeature> $ProcessorFeatures
 * @property string $DbiResourceId
 * @property list<Tag> $TagList
 * @property \Aws\Api\DateTimeResult $OriginalSnapshotCreateTime
 * @property \Aws\Api\DateTimeResult $SnapshotDatabaseTime
 * @property string $SnapshotTarget
 * @property int $StorageThroughput
 * @property string $DBSystemId
 * @property bool $DedicatedLogVolume
 * @property bool $MultiTenant
 */
class DBSnapshot extends Shape
{
    /**
     * @param array{
     *     DBSnapshotIdentifier?: string,
     *     DBInstanceIdentifier?: string,
     *     SnapshotCreateTime?: \Aws\Api\DateTimeResult,
     *     Engine?: string,
     *     AllocatedStorage?: int,
     *     Status?: string,
     *     Port?: int,
     *     AvailabilityZone?: string,
     *     VpcId?: string,
     *     InstanceCreateTime?: \Aws\Api\DateTimeResult,
     *     MasterUsername?: string,
     *     EngineVersion?: string,
     *     LicenseModel?: string,
     *     SnapshotType?: string,
     *     Iops?: int,
     *     OptionGroupName?: string,
     *     PercentProgress?: int,
     *     SourceRegion?: string,
     *     SourceDBSnapshotIdentifier?: string,
     *     StorageType?: string,
     *     TdeCredentialArn?: string,
     *     Encrypted?: bool,
     *     KmsKeyId?: string,
     *     DBSnapshotArn?: string,
     *     Timezone?: string,
     *     IAMDatabaseAuthenticationEnabled?: bool,
     *     ProcessorFeatures?: list<ProcessorFeature>,
     *     DbiResourceId?: string,
     *     TagList?: list<Tag>,
     *     OriginalSnapshotCreateTime?: \Aws\Api\DateTimeResult,
     *     SnapshotDatabaseTime?: \Aws\Api\DateTimeResult,
     *     SnapshotTarget?: string,
     *     StorageThroughput?: int,
     *     DBSystemId?: string,
     *     DedicatedLogVolume?: bool,
     *     MultiTenant?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
