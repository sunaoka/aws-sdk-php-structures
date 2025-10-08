<?php

namespace Sunaoka\Aws\Structures\AuditManager\BatchAssociateAssessmentReportEvidence;

trait BatchAssociateAssessmentReportEvidenceTrait
{
    /**
     * @param BatchAssociateAssessmentReportEvidenceRequest $args
     * @return BatchAssociateAssessmentReportEvidenceResponse
     */
    public function batchAssociateAssessmentReportEvidence(BatchAssociateAssessmentReportEvidenceRequest $args)
    {
        $result = parent::batchAssociateAssessmentReportEvidence($args->toArray());
        return new BatchAssociateAssessmentReportEvidenceResponse($result->toArray());
    }
}
