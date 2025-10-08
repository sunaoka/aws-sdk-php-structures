<?php

namespace Sunaoka\Aws\Structures\Backup\CreateReportPlan;

trait CreateReportPlanTrait
{
    /**
     * @param CreateReportPlanRequest $args
     * @return CreateReportPlanResponse
     */
    public function createReportPlan(CreateReportPlanRequest $args)
    {
        $result = parent::createReportPlan($args->toArray());
        return new CreateReportPlanResponse($result->toArray());
    }
}
