<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateProductRestEndpointPage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property None|null $None
 * @property DisplayContentOverrides|null $Overrides
 */
class EndpointDisplayContent extends Shape
{
    /**
     * @param array{
     *     None?: None|null,
     *     Overrides?: DisplayContentOverrides|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
