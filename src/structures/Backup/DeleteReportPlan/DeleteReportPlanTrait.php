<?php

namespace Sunaoka\Aws\Structures\Backup\DeleteReportPlan;

trait DeleteReportPlanTrait
{
    /**
     * @param DeleteReportPlanRequest $args
     * @return void
     */
    public function deleteReportPlan(DeleteReportPlanRequest $args)
    {
        parent::deleteReportPlan($args->toArray());
    }
}
