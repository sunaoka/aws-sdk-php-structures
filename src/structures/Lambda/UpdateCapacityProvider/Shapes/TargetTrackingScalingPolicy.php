<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LambdaCapacityProviderAverageCPUUtilization' $PredefinedMetricType
 * @property double $TargetValue
 */
class TargetTrackingScalingPolicy extends Shape
{
    /**
     * @param array{
     *     PredefinedMetricType: 'LambdaCapacityProviderAverageCPUUtilization',
     *     TargetValue: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
