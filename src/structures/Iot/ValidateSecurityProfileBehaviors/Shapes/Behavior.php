<?php

namespace Sunaoka\Aws\Structures\Iot\ValidateSecurityProfileBehaviors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $metric
 * @property MetricDimension|null $metricDimension
 * @property BehaviorCriteria|null $criteria
 * @property bool|null $suppressAlerts
 * @property bool|null $exportMetric
 */
class Behavior extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     metric?: string|null,
     *     metricDimension?: MetricDimension|null,
     *     criteria?: BehaviorCriteria|null,
     *     suppressAlerts?: bool|null,
     *     exportMetric?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
