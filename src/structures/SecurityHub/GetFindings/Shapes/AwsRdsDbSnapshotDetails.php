<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DbSnapshotIdentifier
 * @property string|null $DbInstanceIdentifier
 * @property string|null $SnapshotCreateTime
 * @property string|null $Engine
 * @property int|null $AllocatedStorage
 * @property string|null $Status
 * @property int|null $Port
 * @property string|null $AvailabilityZone
 * @property string|null $VpcId
 * @property string|null $InstanceCreateTime
 * @property string|null $MasterUsername
 * @property string|null $EngineVersion
 * @property string|null $LicenseModel
 * @property string|null $SnapshotType
 * @property int|null $Iops
 * @property string|null $OptionGroupName
 * @property int|null $PercentProgress
 * @property string|null $SourceRegion
 * @property string|null $SourceDbSnapshotIdentifier
 * @property string|null $StorageType
 * @property string|null $TdeCredentialArn
 * @property bool|null $Encrypted
 * @property string|null $KmsKeyId
 * @property string|null $Timezone
 * @property bool|null $IamDatabaseAuthenticationEnabled
 * @property list<AwsRdsDbProcessorFeature>|null $ProcessorFeatures
 * @property string|null $DbiResourceId
 */
class AwsRdsDbSnapshotDetails extends Shape
{
    /**
     * @param array{
     *     DbSnapshotIdentifier?: string|null,
     *     DbInstanceIdentifier?: string|null,
     *     SnapshotCreateTime?: string|null,
     *     Engine?: string|null,
     *     AllocatedStorage?: int|null,
     *     Status?: string|null,
     *     Port?: int|null,
     *     AvailabilityZone?: string|null,
     *     VpcId?: string|null,
     *     InstanceCreateTime?: string|null,
     *     MasterUsername?: string|null,
     *     EngineVersion?: string|null,
     *     LicenseModel?: string|null,
     *     SnapshotType?: string|null,
     *     Iops?: int|null,
     *     OptionGroupName?: string|null,
     *     PercentProgress?: int|null,
     *     SourceRegion?: string|null,
     *     SourceDbSnapshotIdentifier?: string|null,
     *     StorageType?: string|null,
     *     TdeCredentialArn?: string|null,
     *     Encrypted?: bool|null,
     *     KmsKeyId?: string|null,
     *     Timezone?: string|null,
     *     IamDatabaseAuthenticationEnabled?: bool|null,
     *     ProcessorFeatures?: list<AwsRdsDbProcessorFeature>|null,
     *     DbiResourceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
