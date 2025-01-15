<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $expression
 */
class Schedule extends Shape
{
    /**
     * @param array{expression?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
