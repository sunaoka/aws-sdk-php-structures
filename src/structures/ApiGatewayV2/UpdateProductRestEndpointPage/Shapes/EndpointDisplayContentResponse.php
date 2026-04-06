<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateProductRestEndpointPage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Body
 * @property string $Endpoint
 * @property string|null $OperationName
 */
class EndpointDisplayContentResponse extends Shape
{
    /**
     * @param array{
     *     Body?: string|null,
     *     Endpoint: string,
     *     OperationName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
