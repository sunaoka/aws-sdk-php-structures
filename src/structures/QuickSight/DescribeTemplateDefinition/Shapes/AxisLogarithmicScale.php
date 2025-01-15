<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Base
 */
class AxisLogarithmicScale extends Shape
{
    /**
     * @param array{Base?: double|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
