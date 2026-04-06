<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListGoals;

trait ListGoalsTrait
{
    /**
     * @param ListGoalsRequest $args
     * @return ListGoalsResponse
     */
    public function listGoals(ListGoalsRequest $args)
    {
        $result = parent::listGoals($args->toArray());
        return new ListGoalsResponse($result->toArray());
    }
}
