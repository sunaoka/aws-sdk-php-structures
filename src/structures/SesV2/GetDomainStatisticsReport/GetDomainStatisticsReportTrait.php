<?php

namespace Sunaoka\Aws\Structures\SesV2\GetDomainStatisticsReport;

trait GetDomainStatisticsReportTrait
{
    /**
     * @param GetDomainStatisticsReportRequest $args
     * @return GetDomainStatisticsReportResponse
     */
    public function getDomainStatisticsReport(GetDomainStatisticsReportRequest $args)
    {
        $result = parent::getDomainStatisticsReport($args->toArray());
        return new GetDomainStatisticsReportResponse($result->toArray());
    }
}
