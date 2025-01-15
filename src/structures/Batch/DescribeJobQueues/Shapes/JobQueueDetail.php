<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobQueueName
 * @property string $jobQueueArn
 * @property 'ENABLED'|'DISABLED' $state
 * @property string|null $schedulingPolicyArn
 * @property 'CREATING'|'UPDATING'|'DELETING'|'DELETED'|'VALID'|'INVALID'|null $status
 * @property string|null $statusReason
 * @property int $priority
 * @property list<ComputeEnvironmentOrder> $computeEnvironmentOrder
 * @property array<string, string>|null $tags
 * @property list<JobStateTimeLimitAction>|null $jobStateTimeLimitActions
 */
class JobQueueDetail extends Shape
{
    /**
     * @param array{
     *     jobQueueName: string,
     *     jobQueueArn: string,
     *     state: 'ENABLED'|'DISABLED',
     *     schedulingPolicyArn?: string|null,
     *     status?: 'CREATING'|'UPDATING'|'DELETING'|'DELETED'|'VALID'|'INVALID'|null,
     *     statusReason?: string|null,
     *     priority: int,
     *     computeEnvironmentOrder: list<ComputeEnvironmentOrder>,
     *     tags?: array<string, string>|null,
     *     jobStateTimeLimitActions?: list<JobStateTimeLimitAction>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
