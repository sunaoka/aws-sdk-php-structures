<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricDataV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MetricFilterKey
 * @property list<string>|null $MetricFilterValues
 */
class MetricFilterV2 extends Shape
{
    /**
     * @param array{
     *     MetricFilterKey?: string|null,
     *     MetricFilterValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
