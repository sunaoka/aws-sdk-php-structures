<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Entity|null $Entity
 * @property list<MetricDatum>|null $MetricData
 */
class EntityMetricData extends Shape
{
    /**
     * @param array{
     *     Entity?: Entity|null,
     *     MetricData?: list<MetricDatum>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
