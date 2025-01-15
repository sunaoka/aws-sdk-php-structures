<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCustomRoutingEndpointGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ListenerArn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListCustomRoutingEndpointGroupsRequest extends Request
{
    /**
     * @param array{
     *     ListenerArn: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
