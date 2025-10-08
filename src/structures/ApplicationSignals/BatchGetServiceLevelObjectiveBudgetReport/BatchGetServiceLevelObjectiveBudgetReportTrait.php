<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\BatchGetServiceLevelObjectiveBudgetReport;

trait BatchGetServiceLevelObjectiveBudgetReportTrait
{
    /**
     * @param BatchGetServiceLevelObjectiveBudgetReportRequest $args
     * @return BatchGetServiceLevelObjectiveBudgetReportResponse
     */
    public function batchGetServiceLevelObjectiveBudgetReport(BatchGetServiceLevelObjectiveBudgetReportRequest $args)
    {
        $result = parent::batchGetServiceLevelObjectiveBudgetReport($args->toArray());
        return new BatchGetServiceLevelObjectiveBudgetReportResponse($result->toArray());
    }
}
