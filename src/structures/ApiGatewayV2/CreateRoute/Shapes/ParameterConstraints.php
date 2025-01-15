<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Required
 */
class ParameterConstraints extends Shape
{
    /**
     * @param array{Required?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
