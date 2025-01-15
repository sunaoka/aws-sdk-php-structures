<?php

namespace Sunaoka\Aws\Structures\PI\GetResourceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResponseResourceMetricKey|null $Key
 * @property list<DataPoint>|null $DataPoints
 */
class MetricKeyDataPoints extends Shape
{
    /**
     * @param array{
     *     Key?: ResponseResourceMetricKey|null,
     *     DataPoints?: list<DataPoint>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
