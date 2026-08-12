<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateAgentGoal;

trait UpdateAgentGoalTrait
{
    /**
     * @param UpdateAgentGoalRequest $args
     * @return UpdateAgentGoalResponse
     */
    public function updateAgentGoal(UpdateAgentGoalRequest $args)
    {
        $result = parent::updateAgentGoal($args->toArray());
        return new UpdateAgentGoalResponse($result->toArray());
    }
}
