<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $minNodeCount
 * @property int<1, max> $maxNodeCount
 * @property 'CPU_UTILIZATION_PERCENTAGE' $autoScalingMetric
 * @property double $metricTarget
 * @property double $scaleInCooldownSeconds
 * @property double $scaleOutCooldownSeconds
 */
class AutoScalingConfiguration extends Shape
{
    /**
     * @param array{
     *     minNodeCount?: int<1, max>,
     *     maxNodeCount?: int<1, max>,
     *     autoScalingMetric?: 'CPU_UTILIZATION_PERCENTAGE',
     *     metricTarget?: double,
     *     scaleInCooldownSeconds?: double,
     *     scaleOutCooldownSeconds?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
