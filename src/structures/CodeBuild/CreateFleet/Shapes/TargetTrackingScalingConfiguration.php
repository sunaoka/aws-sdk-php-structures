<?php

namespace Sunaoka\Aws\Structures\CodeBuild\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FLEET_UTILIZATION_RATE'|null $metricType
 * @property double|null $targetValue
 */
class TargetTrackingScalingConfiguration extends Shape
{
    /**
     * @param array{
     *     metricType?: 'FLEET_UTILIZATION_RATE'|null,
     *     targetValue?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
