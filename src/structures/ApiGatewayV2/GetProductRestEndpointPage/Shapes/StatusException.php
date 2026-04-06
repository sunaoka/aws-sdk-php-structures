<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetProductRestEndpointPage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Exception
 * @property string|null $Message
 */
class StatusException extends Shape
{
    /**
     * @param array{
     *     Exception?: string|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
