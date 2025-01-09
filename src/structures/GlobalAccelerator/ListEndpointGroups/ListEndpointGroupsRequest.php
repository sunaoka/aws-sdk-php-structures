<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListEndpointGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ListenerArn
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListEndpointGroupsRequest extends Request
{
    /**
     * @param array{
     *     ListenerArn: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
