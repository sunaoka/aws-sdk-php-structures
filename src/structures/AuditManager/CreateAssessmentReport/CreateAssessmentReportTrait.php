<?php

namespace Sunaoka\Aws\Structures\AuditManager\CreateAssessmentReport;

trait CreateAssessmentReportTrait
{
    /**
     * @param CreateAssessmentReportRequest $args
     * @return CreateAssessmentReportResponse
     */
    public function createAssessmentReport(CreateAssessmentReportRequest $args)
    {
        $result = parent::createAssessmentReport($args->toArray());
        return new CreateAssessmentReportResponse($result->toArray());
    }
}
