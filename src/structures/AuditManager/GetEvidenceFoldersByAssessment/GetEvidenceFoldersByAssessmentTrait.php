<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetEvidenceFoldersByAssessment;

trait GetEvidenceFoldersByAssessmentTrait
{
    /**
     * @param GetEvidenceFoldersByAssessmentRequest $args
     * @return GetEvidenceFoldersByAssessmentResponse
     */
    public function getEvidenceFoldersByAssessment(GetEvidenceFoldersByAssessmentRequest $args)
    {
        $result = parent::getEvidenceFoldersByAssessment($args->toArray());
        return new GetEvidenceFoldersByAssessmentResponse($result->toArray());
    }
}
