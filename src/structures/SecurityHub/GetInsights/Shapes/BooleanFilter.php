<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Value
 */
class BooleanFilter extends Shape
{
    /**
     * @param array{Value?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
