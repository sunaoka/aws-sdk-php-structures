<?php

namespace Sunaoka\Aws\Structures\Batch\CreateJobQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobQueueName
 * @property 'ENABLED'|'DISABLED' $state
 * @property string $schedulingPolicyArn
 * @property int $priority
 * @property list<Shapes\ComputeEnvironmentOrder> $computeEnvironmentOrder
 * @property array<string, string> $tags
 * @property list<Shapes\JobStateTimeLimitAction> $jobStateTimeLimitActions
 */
class CreateJobQueueRequest extends Request
{
    /**
     * @param array{
     *     jobQueueName: string,
     *     state?: 'ENABLED'|'DISABLED',
     *     schedulingPolicyArn?: string,
     *     priority: int,
     *     computeEnvironmentOrder: list<Shapes\ComputeEnvironmentOrder>,
     *     tags?: array<string, string>,
     *     jobStateTimeLimitActions?: list<Shapes\JobStateTimeLimitAction>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
