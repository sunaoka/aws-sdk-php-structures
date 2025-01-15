<?php

namespace Sunaoka\Aws\Structures\CodeBuild\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TARGET_TRACKING_SCALING'|null $scalingType
 * @property list<TargetTrackingScalingConfiguration>|null $targetTrackingScalingConfigs
 * @property int<1, max>|null $maxCapacity
 * @property int<1, max>|null $desiredCapacity
 */
class ScalingConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     scalingType?: 'TARGET_TRACKING_SCALING'|null,
     *     targetTrackingScalingConfigs?: list<TargetTrackingScalingConfiguration>|null,
     *     maxCapacity?: int<1, max>|null,
     *     desiredCapacity?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
