<?php

namespace Sunaoka\Aws\Structures\AutoScaling\UpdateAutoScalingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $ZonalShiftEnabled
 * @property 'ReplaceUnhealthy'|'IgnoreUnhealthy'|null $ImpairedZoneHealthCheckBehavior
 */
class AvailabilityZoneImpairmentPolicy extends Shape
{
    /**
     * @param array{
     *     ZonalShiftEnabled?: bool|null,
     *     ImpairedZoneHealthCheckBehavior?: 'ReplaceUnhealthy'|'IgnoreUnhealthy'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
