<?php

namespace Sunaoka\Aws\Structures\AuditManager\BatchDisassociateAssessmentReportEvidence;

trait BatchDisassociateAssessmentReportEvidenceTrait
{
    /**
     * @param BatchDisassociateAssessmentReportEvidenceRequest $args
     * @return BatchDisassociateAssessmentReportEvidenceResponse
     */
    public function batchDisassociateAssessmentReportEvidence(BatchDisassociateAssessmentReportEvidenceRequest $args)
    {
        $result = parent::batchDisassociateAssessmentReportEvidence($args->toArray());
        return new BatchDisassociateAssessmentReportEvidenceResponse($result->toArray());
    }
}
