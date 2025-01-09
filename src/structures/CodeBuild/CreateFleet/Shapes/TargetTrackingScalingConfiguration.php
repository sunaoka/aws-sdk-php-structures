<?php

namespace Sunaoka\Aws\Structures\CodeBuild\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FLEET_UTILIZATION_RATE' $metricType
 * @property double $targetValue
 */
class TargetTrackingScalingConfiguration extends Shape
{
    /**
     * @param array{
     *     metricType?: 'FLEET_UTILIZATION_RATE',
     *     targetValue?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
