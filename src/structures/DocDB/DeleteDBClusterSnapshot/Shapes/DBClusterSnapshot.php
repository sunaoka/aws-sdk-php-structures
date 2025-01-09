<?php

namespace Sunaoka\Aws\Structures\DocDB\DeleteDBClusterSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AvailabilityZones
 * @property string $DBClusterSnapshotIdentifier
 * @property string $DBClusterIdentifier
 * @property \Aws\Api\DateTimeResult $SnapshotCreateTime
 * @property string $Engine
 * @property string $Status
 * @property int $Port
 * @property string $VpcId
 * @property \Aws\Api\DateTimeResult $ClusterCreateTime
 * @property string $MasterUsername
 * @property string $EngineVersion
 * @property string $SnapshotType
 * @property int $PercentProgress
 * @property bool $StorageEncrypted
 * @property string $KmsKeyId
 * @property string $DBClusterSnapshotArn
 * @property string $SourceDBClusterSnapshotArn
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
     *     Status?: string,
     *     Port?: int,
     *     VpcId?: string,
     *     ClusterCreateTime?: \Aws\Api\DateTimeResult,
     *     MasterUsername?: string,
     *     EngineVersion?: string,
     *     SnapshotType?: string,
     *     PercentProgress?: int,
     *     StorageEncrypted?: bool,
     *     KmsKeyId?: string,
     *     DBClusterSnapshotArn?: string,
     *     SourceDBClusterSnapshotArn?: string,
     *     StorageType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
