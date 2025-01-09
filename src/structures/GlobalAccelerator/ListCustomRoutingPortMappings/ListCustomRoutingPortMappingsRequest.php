<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCustomRoutingPortMappings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceleratorArn
 * @property string $EndpointGroupArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListCustomRoutingPortMappingsRequest extends Request
{
    /**
     * @param array{
     *     AcceleratorArn: string,
     *     EndpointGroupArn?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
