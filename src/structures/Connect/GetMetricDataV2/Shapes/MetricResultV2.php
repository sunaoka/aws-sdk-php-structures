<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricDataV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $Dimensions
 * @property MetricInterval $MetricInterval
 * @property list<MetricDataV2> $Collections
 */
class MetricResultV2 extends Shape
{
    /**
     * @param array{
     *     Dimensions?: array<string, string>,
     *     MetricInterval?: MetricInterval,
     *     Collections?: list<MetricDataV2>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
