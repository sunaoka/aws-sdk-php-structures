<?php

namespace Sunaoka\Aws\Structures\CodeBuild\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TARGET_TRACKING_SCALING' $scalingType
 * @property list<TargetTrackingScalingConfiguration> $targetTrackingScalingConfigs
 * @property int $maxCapacity
 */
class ScalingConfigurationInput extends Shape
{
    /**
     * @param array{
     *     scalingType?: 'TARGET_TRACKING_SCALING',
     *     targetTrackingScalingConfigs?: list<TargetTrackingScalingConfiguration>,
     *     maxCapacity?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
