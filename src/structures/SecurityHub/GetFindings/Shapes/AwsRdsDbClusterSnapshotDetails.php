<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AvailabilityZones
 * @property string|null $SnapshotCreateTime
 * @property string|null $Engine
 * @property int|null $AllocatedStorage
 * @property string|null $Status
 * @property int|null $Port
 * @property string|null $VpcId
 * @property string|null $ClusterCreateTime
 * @property string|null $MasterUsername
 * @property string|null $EngineVersion
 * @property string|null $LicenseModel
 * @property string|null $SnapshotType
 * @property int|null $PercentProgress
 * @property bool|null $StorageEncrypted
 * @property string|null $KmsKeyId
 * @property string|null $DbClusterIdentifier
 * @property string|null $DbClusterSnapshotIdentifier
 * @property bool|null $IamDatabaseAuthenticationEnabled
 * @property list<AwsRdsDbClusterSnapshotDbClusterSnapshotAttribute>|null $DbClusterSnapshotAttributes
 */
class AwsRdsDbClusterSnapshotDetails extends Shape
{
    /**
     * @param array{
     *     AvailabilityZones?: list<string>|null,
     *     SnapshotCreateTime?: string|null,
     *     Engine?: string|null,
     *     AllocatedStorage?: int|null,
     *     Status?: string|null,
     *     Port?: int|null,
     *     VpcId?: string|null,
     *     ClusterCreateTime?: string|null,
     *     MasterUsername?: string|null,
     *     EngineVersion?: string|null,
     *     LicenseModel?: string|null,
     *     SnapshotType?: string|null,
     *     PercentProgress?: int|null,
     *     StorageEncrypted?: bool|null,
     *     KmsKeyId?: string|null,
     *     DbClusterIdentifier?: string|null,
     *     DbClusterSnapshotIdentifier?: string|null,
     *     IamDatabaseAuthenticationEnabled?: bool|null,
     *     DbClusterSnapshotAttributes?: list<AwsRdsDbClusterSnapshotDbClusterSnapshotAttribute>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
