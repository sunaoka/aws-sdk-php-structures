<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\RegisterScalableTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $DynamicScalingInSuspended
 * @property bool $DynamicScalingOutSuspended
 * @property bool $ScheduledScalingSuspended
 */
class SuspendedState extends Shape
{
    /**
     * @param array{
     *     DynamicScalingInSuspended?: bool,
     *     DynamicScalingOutSuspended?: bool,
     *     ScheduledScalingSuspended?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
