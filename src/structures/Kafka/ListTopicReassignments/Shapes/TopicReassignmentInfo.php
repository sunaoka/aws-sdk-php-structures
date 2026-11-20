<?php

namespace Sunaoka\Aws\Structures\Kafka\ListTopicReassignments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $CompletedTopics
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property 'PENDING'|'IN_PROGRESS'|'STOPPING'|'COMPLETE'|'FAILED'|'STOPPED'|null $Status
 * @property string|null $TargetInstanceType
 * @property string|null $TopicReassignmentOperationArn
 * @property int|null $TotalTopics
 */
class TopicReassignmentInfo extends Shape
{
    /**
     * @param array{
     *     CompletedTopics?: int|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'PENDING'|'IN_PROGRESS'|'STOPPING'|'COMPLETE'|'FAILED'|'STOPPED'|null,
     *     TargetInstanceType?: string|null,
     *     TopicReassignmentOperationArn?: string|null,
     *     TotalTopics?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
