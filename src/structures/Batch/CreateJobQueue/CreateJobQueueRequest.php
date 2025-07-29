<?php

namespace Sunaoka\Aws\Structures\Batch\CreateJobQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobQueueName
 * @property 'ENABLED'|'DISABLED'|null $state
 * @property string|null $schedulingPolicyArn
 * @property int $priority
 * @property list<Shapes\ComputeEnvironmentOrder>|null $computeEnvironmentOrder
 * @property list<Shapes\ServiceEnvironmentOrder>|null $serviceEnvironmentOrder
 * @property 'EKS'|'ECS'|'ECS_FARGATE'|'SAGEMAKER_TRAINING'|null $jobQueueType
 * @property array<string, string>|null $tags
 * @property list<Shapes\JobStateTimeLimitAction>|null $jobStateTimeLimitActions
 */
class CreateJobQueueRequest extends Request
{
    /**
     * @param array{
     *     jobQueueName: string,
     *     state?: 'ENABLED'|'DISABLED'|null,
     *     schedulingPolicyArn?: string|null,
     *     priority: int,
     *     computeEnvironmentOrder?: list<Shapes\ComputeEnvironmentOrder>|null,
     *     serviceEnvironmentOrder?: list<Shapes\ServiceEnvironmentOrder>|null,
     *     jobQueueType?: 'EKS'|'ECS'|'ECS_FARGATE'|'SAGEMAKER_TRAINING'|null,
     *     tags?: array<string, string>|null,
     *     jobStateTimeLimitActions?: list<Shapes\JobStateTimeLimitAction>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
