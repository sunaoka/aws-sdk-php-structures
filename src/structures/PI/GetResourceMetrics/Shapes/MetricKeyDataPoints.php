<?php

namespace Sunaoka\Aws\Structures\PI\GetResourceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResponseResourceMetricKey $Key
 * @property list<DataPoint> $DataPoints
 */
class MetricKeyDataPoints extends Shape
{
    /**
     * @param array{
     *     Key?: ResponseResourceMetricKey,
     *     DataPoints?: list<DataPoint>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
