<?php

namespace Sunaoka\Aws\Structures\Backup\ListReportPlans;

trait ListReportPlansTrait
{
    /**
     * @param ListReportPlansRequest $args
     * @return ListReportPlansResponse
     */
    public function listReportPlans(ListReportPlansRequest $args)
    {
        $result = parent::listReportPlans($args->toArray());
        return new ListReportPlansResponse($result->toArray());
    }
}
