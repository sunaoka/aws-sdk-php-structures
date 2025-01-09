<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DeleteScheduledAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property string $ScheduledActionName
 */
class DeleteScheduledActionRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     ScheduledActionName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
