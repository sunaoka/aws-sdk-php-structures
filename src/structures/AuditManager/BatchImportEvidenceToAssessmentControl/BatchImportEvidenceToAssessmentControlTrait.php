<?php

namespace Sunaoka\Aws\Structures\AuditManager\BatchImportEvidenceToAssessmentControl;

trait BatchImportEvidenceToAssessmentControlTrait
{
    /**
     * @param BatchImportEvidenceToAssessmentControlRequest $args
     * @return BatchImportEvidenceToAssessmentControlResponse
     */
    public function batchImportEvidenceToAssessmentControl(BatchImportEvidenceToAssessmentControlRequest $args)
    {
        $result = parent::batchImportEvidenceToAssessmentControl($args->toArray());
        return new BatchImportEvidenceToAssessmentControlResponse($result->toArray());
    }
}
