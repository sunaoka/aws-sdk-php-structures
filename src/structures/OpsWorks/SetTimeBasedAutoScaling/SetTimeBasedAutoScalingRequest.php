<?php

namespace Sunaoka\Aws\Structures\OpsWorks\SetTimeBasedAutoScaling;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property Shapes\WeeklyAutoScalingSchedule $AutoScalingSchedule
 */
class SetTimeBasedAutoScalingRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     AutoScalingSchedule?: Shapes\WeeklyAutoScalingSchedule
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
