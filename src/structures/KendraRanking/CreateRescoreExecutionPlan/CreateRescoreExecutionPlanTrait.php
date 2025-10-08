<?php

namespace Sunaoka\Aws\Structures\KendraRanking\CreateRescoreExecutionPlan;

trait CreateRescoreExecutionPlanTrait
{
    /**
     * @param CreateRescoreExecutionPlanRequest $args
     * @return CreateRescoreExecutionPlanResponse
     */
    public function createRescoreExecutionPlan(CreateRescoreExecutionPlanRequest $args)
    {
        $result = parent::createRescoreExecutionPlan($args->toArray());
        return new CreateRescoreExecutionPlanResponse($result->toArray());
    }
}
