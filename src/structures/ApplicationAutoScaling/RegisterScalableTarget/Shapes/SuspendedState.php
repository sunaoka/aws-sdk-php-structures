<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\RegisterScalableTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $DynamicScalingInSuspended
 * @property bool|null $DynamicScalingOutSuspended
 * @property bool|null $ScheduledScalingSuspended
 */
class SuspendedState extends Shape
{
    /**
     * @param array{
     *     DynamicScalingInSuspended?: bool|null,
     *     DynamicScalingOutSuspended?: bool|null,
     *     ScheduledScalingSuspended?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
