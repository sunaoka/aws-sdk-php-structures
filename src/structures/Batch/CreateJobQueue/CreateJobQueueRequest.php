<?php

namespace Sunaoka\Aws\Structures\Batch\CreateJobQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobQueueName
 * @property 'ENABLED'|'DISABLED'|null $state
 * @property string|null $schedulingPolicyArn
 * @property int $priority
 * @property list<Shapes\ComputeEnvironmentOrder> $computeEnvironmentOrder
 * @property array<string, string>|null $tags
 */
class CreateJobQueueRequest extends Request
{
    /**
     * @param array{
     *     jobQueueName: string,
     *     state?: 'ENABLED'|'DISABLED'|null,
     *     schedulingPolicyArn?: string|null,
     *     priority: int,
     *     computeEnvironmentOrder: list<Shapes\ComputeEnvironmentOrder>,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
