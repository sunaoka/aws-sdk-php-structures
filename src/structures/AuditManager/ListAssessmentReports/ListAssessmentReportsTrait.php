<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListAssessmentReports;

trait ListAssessmentReportsTrait
{
    /**
     * @param ListAssessmentReportsRequest $args
     * @return ListAssessmentReportsResponse
     */
    public function listAssessmentReports(ListAssessmentReportsRequest $args)
    {
        $result = parent::listAssessmentReports($args->toArray());
        return new ListAssessmentReportsResponse($result->toArray());
    }
}
