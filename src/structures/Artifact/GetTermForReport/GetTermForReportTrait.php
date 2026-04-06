<?php

namespace Sunaoka\Aws\Structures\Artifact\GetTermForReport;

trait GetTermForReportTrait
{
    /**
     * @param GetTermForReportRequest $args
     * @return GetTermForReportResponse
     */
    public function getTermForReport(GetTermForReportRequest $args)
    {
        $result = parent::getTermForReport($args->toArray());
        return new GetTermForReportResponse($result->toArray());
    }
}
