<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\AddCustomRoutingEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EndpointId
 */
class CustomRoutingEndpointDescription extends Shape
{
    /**
     * @param array{EndpointId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
