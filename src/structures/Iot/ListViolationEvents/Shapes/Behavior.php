<?php

namespace Sunaoka\Aws\Structures\Iot\ListViolationEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $metric
 * @property MetricDimension|null $metricDimension
 * @property BehaviorCriteria|null $criteria
 * @property bool|null $suppressAlerts
 */
class Behavior extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     metric?: string|null,
     *     metricDimension?: MetricDimension|null,
     *     criteria?: BehaviorCriteria|null,
     *     suppressAlerts?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
