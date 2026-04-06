<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateProductRestEndpointPage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Method
 * @property string $Path
 * @property string $RestApiId
 * @property string $Stage
 */
class IdentifierParts extends Shape
{
    /**
     * @param array{
     *     Method: string,
     *     Path: string,
     *     RestApiId: string,
     *     Stage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
