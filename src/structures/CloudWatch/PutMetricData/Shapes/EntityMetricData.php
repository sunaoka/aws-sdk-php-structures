<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Entity $Entity
 * @property list<MetricDatum> $MetricData
 */
class EntityMetricData extends Shape
{
    /**
     * @param array{
     *     Entity?: Entity,
     *     MetricData?: list<MetricDatum>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
