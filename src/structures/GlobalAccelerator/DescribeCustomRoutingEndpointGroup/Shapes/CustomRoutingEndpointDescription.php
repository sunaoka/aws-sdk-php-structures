<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeCustomRoutingEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointId
 */
class CustomRoutingEndpointDescription extends Shape
{
    /**
     * @param array{EndpointId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
