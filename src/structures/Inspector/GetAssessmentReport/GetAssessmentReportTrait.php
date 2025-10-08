<?php

namespace Sunaoka\Aws\Structures\Inspector\GetAssessmentReport;

trait GetAssessmentReportTrait
{
    /**
     * @param GetAssessmentReportRequest $args
     * @return GetAssessmentReportResponse
     */
    public function getAssessmentReport(GetAssessmentReportRequest $args)
    {
        $result = parent::getAssessmentReport($args->toArray());
        return new GetAssessmentReportResponse($result->toArray());
    }
}
