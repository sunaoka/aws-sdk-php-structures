<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateProductRestEndpointPage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IdentifierParts|null $IdentifierParts
 */
class RestEndpointIdentifier extends Shape
{
    /**
     * @param array{IdentifierParts?: IdentifierParts|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
