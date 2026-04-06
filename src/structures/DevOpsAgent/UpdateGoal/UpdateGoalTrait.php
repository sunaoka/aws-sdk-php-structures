<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateGoal;

trait UpdateGoalTrait
{
    /**
     * @param UpdateGoalRequest $args
     * @return UpdateGoalResponse
     */
    public function updateGoal(UpdateGoalRequest $args)
    {
        $result = parent::updateGoal($args->toArray());
        return new UpdateGoalResponse($result->toArray());
    }
}
