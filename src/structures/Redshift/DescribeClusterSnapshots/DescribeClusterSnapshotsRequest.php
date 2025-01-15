<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClusterIdentifier
 * @property string|null $SnapshotIdentifier
 * @property string|null $SnapshotArn
 * @property string|null $SnapshotType
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property int|null $MaxRecords
 * @property string|null $Marker
 * @property string|null $OwnerAccount
 * @property list<string>|null $TagKeys
 * @property list<string>|null $TagValues
 * @property bool|null $ClusterExists
 * @property list<Shapes\SnapshotSortingEntity>|null $SortingEntities
 */
class DescribeClusterSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier?: string|null,
     *     SnapshotIdentifier?: string|null,
     *     SnapshotArn?: string|null,
     *     SnapshotType?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null,
     *     OwnerAccount?: string|null,
     *     TagKeys?: list<string>|null,
     *     TagValues?: list<string>|null,
     *     ClusterExists?: bool|null,
     *     SortingEntities?: list<Shapes\SnapshotSortingEntity>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
