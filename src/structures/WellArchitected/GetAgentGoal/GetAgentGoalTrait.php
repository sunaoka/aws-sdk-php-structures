<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentGoal;

trait GetAgentGoalTrait
{
    /**
     * @param GetAgentGoalRequest $args
     * @return GetAgentGoalResponse
     */
    public function getAgentGoal(GetAgentGoalRequest $args)
    {
        $result = parent::getAgentGoal($args->toArray());
        return new GetAgentGoalResponse($result->toArray());
    }
}
