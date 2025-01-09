<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationGroupId
 * @property string $CacheClusterId
 * @property string $SnapshotName
 * @property string $SnapshotSource
 * @property string $Marker
 * @property int $MaxRecords
 * @property bool $ShowNodeGroupConfig
 */
class DescribeSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     ReplicationGroupId?: string,
     *     CacheClusterId?: string,
     *     SnapshotName?: string,
     *     SnapshotSource?: string,
     *     Marker?: string,
     *     MaxRecords?: int,
     *     ShowNodeGroupConfig?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
