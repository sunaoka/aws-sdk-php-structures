<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateSecurityProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'less-than'|'less-than-equals'|'greater-than'|'greater-than-equals'|'in-cidr-set'|'not-in-cidr-set'|'in-port-set'|'not-in-port-set'|'in-set'|'not-in-set' $comparisonOperator
 * @property MetricValue $value
 * @property int $durationSeconds
 * @property int<1, 10> $consecutiveDatapointsToAlarm
 * @property int<1, 10> $consecutiveDatapointsToClear
 * @property StatisticalThreshold $statisticalThreshold
 * @property MachineLearningDetectionConfig $mlDetectionConfig
 */
class BehaviorCriteria extends Shape
{
    /**
     * @param array{
     *     comparisonOperator?: 'less-than'|'less-than-equals'|'greater-than'|'greater-than-equals'|'in-cidr-set'|'not-in-cidr-set'|'in-port-set'|'not-in-port-set'|'in-set'|'not-in-set',
     *     value?: MetricValue,
     *     durationSeconds?: int,
     *     consecutiveDatapointsToAlarm?: int<1, 10>,
     *     consecutiveDatapointsToClear?: int<1, 10>,
     *     statisticalThreshold?: StatisticalThreshold,
     *     mlDetectionConfig?: MachineLearningDetectionConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
