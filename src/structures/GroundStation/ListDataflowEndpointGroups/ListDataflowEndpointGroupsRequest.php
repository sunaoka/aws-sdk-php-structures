<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListDataflowEndpointGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 100> $maxResults
 * @property string $nextToken
 */
class ListDataflowEndpointGroupsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<0, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
