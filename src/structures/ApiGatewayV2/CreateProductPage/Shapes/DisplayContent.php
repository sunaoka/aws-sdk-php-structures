<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateProductPage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Body
 * @property string $Title
 */
class DisplayContent extends Shape
{
    /**
     * @param array{
     *     Body: string,
     *     Title: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
