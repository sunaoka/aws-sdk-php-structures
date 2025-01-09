<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\AddCustomRoutingEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointId
 * @property string $AttachmentArn
 */
class CustomRoutingEndpointConfiguration extends Shape
{
    /**
     * @param array{
     *     EndpointId?: string,
     *     AttachmentArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
