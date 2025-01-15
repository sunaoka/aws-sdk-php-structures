<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<BaselineMetric>|null $BaselineMetrics
 */
class PredictorBaseline extends Shape
{
    /**
     * @param array{BaselineMetrics?: list<BaselineMetric>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
