<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\GetAnalysisReportResults;

trait GetAnalysisReportResultsTrait
{
    /**
     * @param GetAnalysisReportResultsRequest $args
     * @return GetAnalysisReportResultsResponse
     */
    public function getAnalysisReportResults(GetAnalysisReportResultsRequest $args)
    {
        $result = parent::getAnalysisReportResults($args->toArray());
        return new GetAnalysisReportResultsResponse($result->toArray());
    }
}
