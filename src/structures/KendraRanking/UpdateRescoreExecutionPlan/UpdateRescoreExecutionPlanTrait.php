<?php

namespace Sunaoka\Aws\Structures\KendraRanking\UpdateRescoreExecutionPlan;

trait UpdateRescoreExecutionPlanTrait
{
    /**
     * @param UpdateRescoreExecutionPlanRequest $args
     * @return void
     */
    public function updateRescoreExecutionPlan(UpdateRescoreExecutionPlanRequest $args)
    {
        parent::updateRescoreExecutionPlan($args->toArray());
    }
}
