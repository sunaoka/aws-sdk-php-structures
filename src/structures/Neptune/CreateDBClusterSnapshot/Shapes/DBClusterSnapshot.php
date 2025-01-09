<?php

namespace Sunaoka\Aws\Structures\Neptune\CreateDBClusterSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AvailabilityZones
 * @property string $DBClusterSnapshotIdentifier
 * @property string $DBClusterIdentifier
 * @property \Aws\Api\DateTimeResult $SnapshotCreateTime
 * @property string $Engine
 * @property int $AllocatedStorage
 * @property string $Status
 * @property int $Port
 * @property string $VpcId
 * @property \Aws\Api\DateTimeResult $ClusterCreateTime
 * @property string $MasterUsername
 * @property string $EngineVersion
 * @property string $LicenseModel
 * @property string $SnapshotType
 * @property int $PercentProgress
 * @property bool $StorageEncrypted
 * @property string $KmsKeyId
 * @property string $DBClusterSnapshotArn
 * @property string $SourceDBClusterSnapshotArn
 * @property bool $IAMDatabaseAuthenticationEnabled
 * @property string $StorageType
 */
class DBClusterSnapshot extends Shape
{
    /**
     * @param array{
     *     AvailabilityZones?: list<string>,
     *     DBClusterSnapshotIdentifier?: string,
     *     DBClusterIdentifier?: string,
     *     SnapshotCreateTime?: \Aws\Api\DateTimeResult,
     *     Engine?: string,
     *     AllocatedStorage?: int,
     *     Status?: string,
     *     Port?: int,
     *     VpcId?: string,
     *     ClusterCreateTime?: \Aws\Api\DateTimeResult,
     *     MasterUsername?: string,
     *     EngineVersion?: string,
     *     LicenseModel?: string,
     *     SnapshotType?: string,
     *     PercentProgress?: int,
     *     StorageEncrypted?: bool,
     *     KmsKeyId?: string,
     *     DBClusterSnapshotArn?: string,
     *     SourceDBClusterSnapshotArn?: string,
     *     IAMDatabaseAuthenticationEnabled?: bool,
     *     StorageType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
