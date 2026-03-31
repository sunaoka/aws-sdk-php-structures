<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateGoal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $goalId
 * @property Shapes\GoalScheduleInput|null $evaluationSchedule
 * @property string|null $clientToken
 */
class UpdateGoalRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     goalId: string,
     *     evaluationSchedule?: Shapes\GoalScheduleInput|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
