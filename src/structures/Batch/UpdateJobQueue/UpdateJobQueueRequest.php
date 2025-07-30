<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateJobQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobQueue
 * @property 'ENABLED'|'DISABLED'|null $state
 * @property string|null $schedulingPolicyArn
 * @property int|null $priority
 * @property list<Shapes\ComputeEnvironmentOrder>|null $computeEnvironmentOrder
 * @property list<Shapes\ServiceEnvironmentOrder>|null $serviceEnvironmentOrder
 * @property list<Shapes\JobStateTimeLimitAction>|null $jobStateTimeLimitActions
 */
class UpdateJobQueueRequest extends Request
{
    /**
     * @param array{
     *     jobQueue: string,
     *     state?: 'ENABLED'|'DISABLED'|null,
     *     schedulingPolicyArn?: string|null,
     *     priority?: int|null,
     *     computeEnvironmentOrder?: list<Shapes\ComputeEnvironmentOrder>|null,
     *     serviceEnvironmentOrder?: list<Shapes\ServiceEnvironmentOrder>|null,
     *     jobStateTimeLimitActions?: list<Shapes\JobStateTimeLimitAction>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
