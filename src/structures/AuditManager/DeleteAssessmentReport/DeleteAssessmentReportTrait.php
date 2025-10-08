<?php

namespace Sunaoka\Aws\Structures\AuditManager\DeleteAssessmentReport;

trait DeleteAssessmentReportTrait
{
    /**
     * @param DeleteAssessmentReportRequest $args
     * @return DeleteAssessmentReportResponse
     */
    public function deleteAssessmentReport(DeleteAssessmentReportRequest $args)
    {
        $result = parent::deleteAssessmentReport($args->toArray());
        return new DeleteAssessmentReportResponse($result->toArray());
    }
}
