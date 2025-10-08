<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetConsolidatedReport;

trait GetConsolidatedReportTrait
{
    /**
     * @param GetConsolidatedReportRequest $args
     * @return GetConsolidatedReportResponse
     */
    public function getConsolidatedReport(GetConsolidatedReportRequest $args)
    {
        $result = parent::getConsolidatedReport($args->toArray());
        return new GetConsolidatedReportResponse($result->toArray());
    }
}
