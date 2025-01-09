<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Value
 */
class BooleanFilter extends Shape
{
    /**
     * @param array{Value?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
