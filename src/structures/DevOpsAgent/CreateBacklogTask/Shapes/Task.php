<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\CreateBacklogTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentSpaceId
 * @property string $taskId
 * @property string|null $executionId
 * @property string $title
 * @property string|null $description
 * @property ReferenceOutput|null $reference
 * @property 'INVESTIGATION'|'EVALUATION' $taskType
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'MINIMAL' $priority
 * @property 'PENDING_TRIAGE'|'LINKED'|'PENDING_START'|'IN_PROGRESS'|'PENDING_CUSTOMER_APPROVAL'|'COMPLETED'|'FAILED'|'TIMED_OUT'|'CANCELED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property int $version
 * @property Document|null $supportMetadata
 * @property Document|null $metadata
 * @property string|null $primaryTaskId
 * @property string|null $statusReason
 * @property bool|null $hasLinkedTasks
 */
class Task extends Shape
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     taskId: string,
     *     executionId?: string|null,
     *     title: string,
     *     description?: string|null,
     *     reference?: ReferenceOutput|null,
     *     taskType: 'INVESTIGATION'|'EVALUATION',
     *     priority: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'MINIMAL',
     *     status: 'PENDING_TRIAGE'|'LINKED'|'PENDING_START'|'IN_PROGRESS'|'PENDING_CUSTOMER_APPROVAL'|'COMPLETED'|'FAILED'|'TIMED_OUT'|'CANCELED',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     version: int,
     *     supportMetadata?: Document|null,
     *     metadata?: Document|null,
     *     primaryTaskId?: string|null,
     *     statusReason?: string|null,
     *     hasLinkedTasks?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
