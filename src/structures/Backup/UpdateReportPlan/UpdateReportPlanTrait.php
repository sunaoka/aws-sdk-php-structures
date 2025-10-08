<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateReportPlan;

trait UpdateReportPlanTrait
{
    /**
     * @param UpdateReportPlanRequest $args
     * @return UpdateReportPlanResponse
     */
    public function updateReportPlan(UpdateReportPlanRequest $args)
    {
        $result = parent::updateReportPlan($args->toArray());
        return new UpdateReportPlanResponse($result->toArray());
    }
}
