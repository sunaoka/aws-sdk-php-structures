<?php

namespace Sunaoka\Aws\Structures\PCS\ListComputeNodeGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterIdentifier
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListComputeNodeGroupsRequest extends Request
{
    /**
     * @param array{
     *     clusterIdentifier: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
