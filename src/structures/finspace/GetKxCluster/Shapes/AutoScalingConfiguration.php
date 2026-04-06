<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $minNodeCount
 * @property int<1, max>|null $maxNodeCount
 * @property 'CPU_UTILIZATION_PERCENTAGE'|null $autoScalingMetric
 * @property double|null $metricTarget
 * @property double|null $scaleInCooldownSeconds
 * @property double|null $scaleOutCooldownSeconds
 */
class AutoScalingConfiguration extends Shape
{
    /**
     * @param array{
     *     minNodeCount?: int<1, max>|null,
     *     maxNodeCount?: int<1, max>|null,
     *     autoScalingMetric?: 'CPU_UTILIZATION_PERCENTAGE'|null,
     *     metricTarget?: double|null,
     *     scaleInCooldownSeconds?: double|null,
     *     scaleOutCooldownSeconds?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
