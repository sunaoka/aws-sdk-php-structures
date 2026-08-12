<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateAgentGoal;

trait CreateAgentGoalTrait
{
    /**
     * @param CreateAgentGoalRequest $args
     * @return CreateAgentGoalResponse
     */
    public function createAgentGoal(CreateAgentGoalRequest $args)
    {
        $result = parent::createAgentGoal($args->toArray());
        return new CreateAgentGoalResponse($result->toArray());
    }
}
