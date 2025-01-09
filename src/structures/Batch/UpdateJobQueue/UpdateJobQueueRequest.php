<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateJobQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobQueue
 * @property 'ENABLED'|'DISABLED' $state
 * @property string $schedulingPolicyArn
 * @property int $priority
 * @property list<Shapes\ComputeEnvironmentOrder> $computeEnvironmentOrder
 * @property list<Shapes\JobStateTimeLimitAction> $jobStateTimeLimitActions
 */
class UpdateJobQueueRequest extends Request
{
    /**
     * @param array{
     *     jobQueue: string,
     *     state?: 'ENABLED'|'DISABLED',
     *     schedulingPolicyArn?: string,
     *     priority?: int,
     *     computeEnvironmentOrder?: list<Shapes\ComputeEnvironmentOrder>,
     *     jobStateTimeLimitActions?: list<Shapes\JobStateTimeLimitAction>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
