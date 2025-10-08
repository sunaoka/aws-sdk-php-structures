<?php

namespace Sunaoka\Aws\Structures\KendraRanking\DeleteRescoreExecutionPlan;

trait DeleteRescoreExecutionPlanTrait
{
    /**
     * @param DeleteRescoreExecutionPlanRequest $args
     * @return void
     */
    public function deleteRescoreExecutionPlan(DeleteRescoreExecutionPlanRequest $args)
    {
        parent::deleteRescoreExecutionPlan($args->toArray());
    }
}
