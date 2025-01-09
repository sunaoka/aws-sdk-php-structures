<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AvailabilityZones
 * @property string $SnapshotCreateTime
 * @property string $Engine
 * @property int $AllocatedStorage
 * @property string $Status
 * @property int $Port
 * @property string $VpcId
 * @property string $ClusterCreateTime
 * @property string $MasterUsername
 * @property string $EngineVersion
 * @property string $LicenseModel
 * @property string $SnapshotType
 * @property int $PercentProgress
 * @property bool $StorageEncrypted
 * @property string $KmsKeyId
 * @property string $DbClusterIdentifier
 * @property string $DbClusterSnapshotIdentifier
 * @property bool $IamDatabaseAuthenticationEnabled
 * @property list<AwsRdsDbClusterSnapshotDbClusterSnapshotAttribute> $DbClusterSnapshotAttributes
 */
class AwsRdsDbClusterSnapshotDetails extends Shape
{
    /**
     * @param array{
     *     AvailabilityZones?: list<string>,
     *     SnapshotCreateTime?: string,
     *     Engine?: string,
     *     AllocatedStorage?: int,
     *     Status?: string,
     *     Port?: int,
     *     VpcId?: string,
     *     ClusterCreateTime?: string,
     *     MasterUsername?: string,
     *     EngineVersion?: string,
     *     LicenseModel?: string,
     *     SnapshotType?: string,
     *     PercentProgress?: int,
     *     StorageEncrypted?: bool,
     *     KmsKeyId?: string,
     *     DbClusterIdentifier?: string,
     *     DbClusterSnapshotIdentifier?: string,
     *     IamDatabaseAuthenticationEnabled?: bool,
     *     DbClusterSnapshotAttributes?: list<AwsRdsDbClusterSnapshotDbClusterSnapshotAttribute>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
