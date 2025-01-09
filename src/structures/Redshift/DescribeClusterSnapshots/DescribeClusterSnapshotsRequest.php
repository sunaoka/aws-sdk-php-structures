<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property string $SnapshotIdentifier
 * @property string $SnapshotArn
 * @property string $SnapshotType
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property int $MaxRecords
 * @property string $Marker
 * @property string $OwnerAccount
 * @property list<string> $TagKeys
 * @property list<string> $TagValues
 * @property bool $ClusterExists
 * @property list<Shapes\SnapshotSortingEntity> $SortingEntities
 */
class DescribeClusterSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier?: string,
     *     SnapshotIdentifier?: string,
     *     SnapshotArn?: string,
     *     SnapshotType?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     MaxRecords?: int,
     *     Marker?: string,
     *     OwnerAccount?: string,
     *     TagKeys?: list<string>,
     *     TagValues?: list<string>,
     *     ClusterExists?: bool,
     *     SortingEntities?: list<Shapes\SnapshotSortingEntity>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
