<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListAgentGoals;

trait ListAgentGoalsTrait
{
    /**
     * @param ListAgentGoalsRequest $args
     * @return ListAgentGoalsResponse
     */
    public function listAgentGoals(ListAgentGoalsRequest $args)
    {
        $result = parent::listAgentGoals($args->toArray());
        return new ListAgentGoalsResponse($result->toArray());
    }
}
