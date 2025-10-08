<?php

namespace Sunaoka\Aws\Structures\KendraRanking\ListRescoreExecutionPlans;

trait ListRescoreExecutionPlansTrait
{
    /**
     * @param ListRescoreExecutionPlansRequest $args
     * @return ListRescoreExecutionPlansResponse
     */
    public function listRescoreExecutionPlans(ListRescoreExecutionPlansRequest $args)
    {
        $result = parent::listRescoreExecutionPlans($args->toArray());
        return new ListRescoreExecutionPlansResponse($result->toArray());
    }
}
