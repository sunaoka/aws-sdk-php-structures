<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListGoals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentSpaceArn
 * @property string $goalId
 * @property string $title
 * @property GoalContent $content
 * @property 'ACTIVE'|'PAUSED'|'COMPLETE' $status
 * @property 'CUSTOMER_DEFINED'|'ONCALL_REPORT' $goalType
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property \Aws\Api\DateTimeResult|null $lastEvaluatedAt
 * @property string|null $lastTaskId
 * @property string|null $lastSuccessfulTaskId
 * @property int $version
 * @property GoalSchedule|null $evaluationSchedule
 */
class Goal extends Shape
{
    /**
     * @param array{
     *     agentSpaceArn: string,
     *     goalId: string,
     *     title: string,
     *     content: GoalContent,
     *     status: 'ACTIVE'|'PAUSED'|'COMPLETE',
     *     goalType: 'CUSTOMER_DEFINED'|'ONCALL_REPORT',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     lastEvaluatedAt?: \Aws\Api\DateTimeResult|null,
     *     lastTaskId?: string|null,
     *     lastSuccessfulTaskId?: string|null,
     *     version: int,
     *     evaluationSchedule?: GoalSchedule|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
