<?php

namespace Sunaoka\Aws\Structures\Artifact\GetReport;

trait GetReportTrait
{
    /**
     * @param GetReportRequest $args
     * @return GetReportResponse
     */
    public function getReport(GetReportRequest $args)
    {
        $result = parent::getReport($args->toArray());
        return new GetReportResponse($result->toArray());
    }
}
