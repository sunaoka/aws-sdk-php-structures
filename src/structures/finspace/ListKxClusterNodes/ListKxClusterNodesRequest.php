<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxClusterNodes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $clusterName
 * @property string|null $nextToken
 * @property int<0, 100>|null $maxResults
 */
class ListKxClusterNodesRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     clusterName: string,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
