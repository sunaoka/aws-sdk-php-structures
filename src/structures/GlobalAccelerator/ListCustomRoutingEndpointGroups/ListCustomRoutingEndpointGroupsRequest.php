<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCustomRoutingEndpointGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ListenerArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListCustomRoutingEndpointGroupsRequest extends Request
{
    /**
     * @param array{
     *     ListenerArn: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
