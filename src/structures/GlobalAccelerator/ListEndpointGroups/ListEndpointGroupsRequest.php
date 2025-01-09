<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListEndpointGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ListenerArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListEndpointGroupsRequest extends Request
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
