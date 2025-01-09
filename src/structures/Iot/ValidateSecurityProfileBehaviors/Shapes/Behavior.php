<?php

namespace Sunaoka\Aws\Structures\Iot\ValidateSecurityProfileBehaviors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $metric
 * @property MetricDimension $metricDimension
 * @property BehaviorCriteria $criteria
 * @property bool $suppressAlerts
 * @property bool $exportMetric
 */
class Behavior extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     metric?: string,
     *     metricDimension?: MetricDimension,
     *     criteria?: BehaviorCriteria,
     *     suppressAlerts?: bool,
     *     exportMetric?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
