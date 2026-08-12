<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DeleteAgentGoal;

trait DeleteAgentGoalTrait
{
    /**
     * @param DeleteAgentGoalRequest $args
     * @return DeleteAgentGoalResponse
     */
    public function deleteAgentGoal(DeleteAgentGoalRequest $args)
    {
        $result = parent::deleteAgentGoal($args->toArray());
        return new DeleteAgentGoalResponse($result->toArray());
    }
}
