<?php

namespace Sunaoka\Aws\Structures\PCS\ListComputeNodeGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterIdentifier
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListComputeNodeGroupsRequest extends Request
{
    /**
     * @param array{
     *     clusterIdentifier: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
