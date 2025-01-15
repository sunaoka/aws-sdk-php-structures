<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PredictorBaseline|null $PredictorBaseline
 */
class Baseline extends Shape
{
    /**
     * @param array{PredictorBaseline?: PredictorBaseline|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
