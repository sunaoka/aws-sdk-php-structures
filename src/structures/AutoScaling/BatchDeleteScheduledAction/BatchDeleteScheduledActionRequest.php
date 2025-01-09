<?php

namespace Sunaoka\Aws\Structures\AutoScaling\BatchDeleteScheduledAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property list<string> $ScheduledActionNames
 */
class BatchDeleteScheduledActionRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     ScheduledActionNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
