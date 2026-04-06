<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\AddCustomRoutingEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EndpointId
 * @property string|null $AttachmentArn
 */
class CustomRoutingEndpointConfiguration extends Shape
{
    /**
     * @param array{
     *     EndpointId?: string|null,
     *     AttachmentArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
