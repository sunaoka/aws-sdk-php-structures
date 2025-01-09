<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAutoScalingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ZonalShiftEnabled
 * @property 'ReplaceUnhealthy'|'IgnoreUnhealthy' $ImpairedZoneHealthCheckBehavior
 */
class AvailabilityZoneImpairmentPolicy extends Shape
{
    /**
     * @param array{
     *     ZonalShiftEnabled?: bool,
     *     ImpairedZoneHealthCheckBehavior?: 'ReplaceUnhealthy'|'IgnoreUnhealthy'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
