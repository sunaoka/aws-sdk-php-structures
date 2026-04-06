<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeServerlessCacheSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ServerlessCacheName
 * @property string|null $ServerlessCacheSnapshotName
 * @property string|null $SnapshotType
 * @property string|null $NextToken
 * @property int|null $MaxResults
 */
class DescribeServerlessCacheSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     ServerlessCacheName?: string|null,
     *     ServerlessCacheSnapshotName?: string|null,
     *     SnapshotType?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
