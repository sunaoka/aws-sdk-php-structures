<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeCustomRoutingEndpointGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointGroupArn
 */
class DescribeCustomRoutingEndpointGroupRequest extends Request
{
    /**
     * @param array{EndpointGroupArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
