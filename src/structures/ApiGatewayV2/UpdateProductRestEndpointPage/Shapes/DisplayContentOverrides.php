<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateProductRestEndpointPage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Body
 * @property string|null $Endpoint
 * @property string|null $OperationName
 */
class DisplayContentOverrides extends Shape
{
    /**
     * @param array{
     *     Body?: string|null,
     *     Endpoint?: string|null,
     *     OperationName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
