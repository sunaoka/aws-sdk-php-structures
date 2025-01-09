<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeServerlessCacheSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerlessCacheName
 * @property string $ServerlessCacheSnapshotName
 * @property string $SnapshotType
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeServerlessCacheSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     ServerlessCacheName?: string,
     *     ServerlessCacheSnapshotName?: string,
     *     SnapshotType?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
