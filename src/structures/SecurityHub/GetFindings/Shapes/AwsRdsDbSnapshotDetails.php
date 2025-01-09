<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DbSnapshotIdentifier
 * @property string $DbInstanceIdentifier
 * @property string $SnapshotCreateTime
 * @property string $Engine
 * @property int $AllocatedStorage
 * @property string $Status
 * @property int $Port
 * @property string $AvailabilityZone
 * @property string $VpcId
 * @property string $InstanceCreateTime
 * @property string $MasterUsername
 * @property string $EngineVersion
 * @property string $LicenseModel
 * @property string $SnapshotType
 * @property int $Iops
 * @property string $OptionGroupName
 * @property int $PercentProgress
 * @property string $SourceRegion
 * @property string $SourceDbSnapshotIdentifier
 * @property string $StorageType
 * @property string $TdeCredentialArn
 * @property bool $Encrypted
 * @property string $KmsKeyId
 * @property string $Timezone
 * @property bool $IamDatabaseAuthenticationEnabled
 * @property list<AwsRdsDbProcessorFeature> $ProcessorFeatures
 * @property string $DbiResourceId
 */
class AwsRdsDbSnapshotDetails extends Shape
{
    /**
     * @param array{
     *     DbSnapshotIdentifier?: string,
     *     DbInstanceIdentifier?: string,
     *     SnapshotCreateTime?: string,
     *     Engine?: string,
     *     AllocatedStorage?: int,
     *     Status?: string,
     *     Port?: int,
     *     AvailabilityZone?: string,
     *     VpcId?: string,
     *     InstanceCreateTime?: string,
     *     MasterUsername?: string,
     *     EngineVersion?: string,
     *     LicenseModel?: string,
     *     SnapshotType?: string,
     *     Iops?: int,
     *     OptionGroupName?: string,
     *     PercentProgress?: int,
     *     SourceRegion?: string,
     *     SourceDbSnapshotIdentifier?: string,
     *     StorageType?: string,
     *     TdeCredentialArn?: string,
     *     Encrypted?: bool,
     *     KmsKeyId?: string,
     *     Timezone?: string,
     *     IamDatabaseAuthenticationEnabled?: bool,
     *     ProcessorFeatures?: list<AwsRdsDbProcessorFeature>,
     *     DbiResourceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
