<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxClusterNodes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $clusterName
 * @property string $nextToken
 * @property int $maxResults
 */
class ListKxClusterNodesRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     clusterName: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
