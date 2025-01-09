<?php

namespace Sunaoka\Aws\Structures\AutoScaling\BatchPutScheduledUpdateGroupAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property list<Shapes\ScheduledUpdateGroupActionRequest> $ScheduledUpdateGroupActions
 */
class BatchPutScheduledUpdateGroupActionRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     ScheduledUpdateGroupActions: list<Shapes\ScheduledUpdateGroupActionRequest>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
