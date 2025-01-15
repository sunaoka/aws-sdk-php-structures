<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\ListClusterSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clusterArn
 * @property int<20, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $snapshotType
 */
class ListClusterSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     clusterArn?: string|null,
     *     maxResults?: int<20, 100>|null,
     *     nextToken?: string|null,
     *     snapshotType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
