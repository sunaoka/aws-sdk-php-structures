<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricDataV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricFilterKey
 * @property list<string> $MetricFilterValues
 * @property bool $Negate
 */
class MetricFilterV2 extends Shape
{
    /**
     * @param array{
     *     MetricFilterKey?: string,
     *     MetricFilterValues?: list<string>,
     *     Negate?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
