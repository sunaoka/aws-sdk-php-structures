<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRIMARY_Y_AXIS' $YAxis
 */
class YAxisOptions extends Shape
{
    /**
     * @param array{YAxis: 'PRIMARY_Y_AXIS'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
