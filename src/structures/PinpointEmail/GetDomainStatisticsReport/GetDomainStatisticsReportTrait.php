<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetDomainStatisticsReport;

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
