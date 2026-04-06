<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\StartQuotaUtilizationReport;

trait StartQuotaUtilizationReportTrait
{
    /**
     * @param StartQuotaUtilizationReportRequest $args
     * @return StartQuotaUtilizationReportResponse
     */
    public function startQuotaUtilizationReport(StartQuotaUtilizationReportRequest $args)
    {
        $result = parent::startQuotaUtilizationReport($args->toArray());
        return new StartQuotaUtilizationReportResponse($result->toArray());
    }
}
