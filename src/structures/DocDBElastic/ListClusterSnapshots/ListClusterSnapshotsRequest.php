<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\ListClusterSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterArn
 * @property int $maxResults
 * @property string $nextToken
 * @property string $snapshotType
 */
class ListClusterSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     clusterArn?: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     snapshotType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
