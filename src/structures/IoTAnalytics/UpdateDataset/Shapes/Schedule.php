<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $expression
 */
class Schedule extends Shape
{
    /**
     * @param array{expression?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
