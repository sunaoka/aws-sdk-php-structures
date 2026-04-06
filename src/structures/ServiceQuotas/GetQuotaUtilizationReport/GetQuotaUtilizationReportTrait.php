<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\GetQuotaUtilizationReport;

trait GetQuotaUtilizationReportTrait
{
    /**
     * @param GetQuotaUtilizationReportRequest $args
     * @return GetQuotaUtilizationReportResponse
     */
    public function getQuotaUtilizationReport(GetQuotaUtilizationReportRequest $args)
    {
        $result = parent::getQuotaUtilizationReport($args->toArray());
        return new GetQuotaUtilizationReportResponse($result->toArray());
    }
}
