<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ReplicationGroupId
 * @property string|null $CacheClusterId
 * @property string|null $SnapshotName
 * @property string|null $SnapshotSource
 * @property string|null $Marker
 * @property int|null $MaxRecords
 * @property bool|null $ShowNodeGroupConfig
 */
class DescribeSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     ReplicationGroupId?: string|null,
     *     CacheClusterId?: string|null,
     *     SnapshotName?: string|null,
     *     SnapshotSource?: string|null,
     *     Marker?: string|null,
     *     MaxRecords?: int|null,
     *     ShowNodeGroupConfig?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
