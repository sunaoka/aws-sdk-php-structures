<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobQueueName
 * @property string $jobQueueArn
 * @property 'ENABLED'|'DISABLED' $state
 * @property string $schedulingPolicyArn
 * @property 'CREATING'|'UPDATING'|'DELETING'|'DELETED'|'VALID'|'INVALID' $status
 * @property string $statusReason
 * @property int $priority
 * @property list<ComputeEnvironmentOrder> $computeEnvironmentOrder
 * @property array<string, string> $tags
 * @property list<JobStateTimeLimitAction> $jobStateTimeLimitActions
 */
class JobQueueDetail extends Shape
{
    /**
     * @param array{
     *     jobQueueName: string,
     *     jobQueueArn: string,
     *     state: 'ENABLED'|'DISABLED',
     *     schedulingPolicyArn?: string,
     *     status?: 'CREATING'|'UPDATING'|'DELETING'|'DELETED'|'VALID'|'INVALID',
     *     statusReason?: string,
     *     priority: int,
     *     computeEnvironmentOrder: list<ComputeEnvironmentOrder>,
     *     tags?: array<string, string>,
     *     jobStateTimeLimitActions?: list<JobStateTimeLimitAction>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
