<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricDataV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $Dimensions
 * @property list<MetricDataV2>|null $Collections
 */
class MetricResultV2 extends Shape
{
    /**
     * @param array{
     *     Dimensions?: array<string, string>|null,
     *     Collections?: list<MetricDataV2>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
