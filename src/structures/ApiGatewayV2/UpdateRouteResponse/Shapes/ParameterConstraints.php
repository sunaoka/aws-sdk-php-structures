<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateRouteResponse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Required
 */
class ParameterConstraints extends Shape
{
    /**
     * @param array{Required?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
