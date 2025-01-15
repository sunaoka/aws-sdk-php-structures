<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCustomRoutingPortMappings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceleratorArn
 * @property string|null $EndpointGroupArn
 * @property int<1, 20000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListCustomRoutingPortMappingsRequest extends Request
{
    /**
     * @param array{
     *     AcceleratorArn: string,
     *     EndpointGroupArn?: string|null,
     *     MaxResults?: int<1, 20000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
