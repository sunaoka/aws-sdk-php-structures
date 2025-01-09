<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PredictorBaseline $PredictorBaseline
 */
class Baseline extends Shape
{
    /**
     * @param array{PredictorBaseline?: PredictorBaseline} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
