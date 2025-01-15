<?php

namespace Sunaoka\Aws\Structures\Iot\ListViolationEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'less-than'|'less-than-equals'|'greater-than'|'greater-than-equals'|'in-cidr-set'|'not-in-cidr-set'|'in-port-set'|'not-in-port-set'|'in-set'|'not-in-set'|null $comparisonOperator
 * @property MetricValue|null $value
 * @property int|null $durationSeconds
 * @property int<1, 10>|null $consecutiveDatapointsToAlarm
 * @property int<1, 10>|null $consecutiveDatapointsToClear
 * @property StatisticalThreshold|null $statisticalThreshold
 * @property MachineLearningDetectionConfig|null $mlDetectionConfig
 */
class BehaviorCriteria extends Shape
{
    /**
     * @param array{
     *     comparisonOperator?: 'less-than'|'less-than-equals'|'greater-than'|'greater-than-equals'|'in-cidr-set'|'not-in-cidr-set'|'in-port-set'|'not-in-port-set'|'in-set'|'not-in-set'|null,
     *     value?: MetricValue|null,
     *     durationSeconds?: int|null,
     *     consecutiveDatapointsToAlarm?: int<1, 10>|null,
     *     consecutiveDatapointsToClear?: int<1, 10>|null,
     *     statisticalThreshold?: StatisticalThreshold|null,
     *     mlDetectionConfig?: MachineLearningDetectionConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
