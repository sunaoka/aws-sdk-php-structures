<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetEvidenceFoldersByAssessmentControl;

trait GetEvidenceFoldersByAssessmentControlTrait
{
    /**
     * @param GetEvidenceFoldersByAssessmentControlRequest $args
     * @return GetEvidenceFoldersByAssessmentControlResponse
     */
    public function getEvidenceFoldersByAssessmentControl(GetEvidenceFoldersByAssessmentControlRequest $args)
    {
        $result = parent::getEvidenceFoldersByAssessmentControl($args->toArray());
        return new GetEvidenceFoldersByAssessmentControlResponse($result->toArray());
    }
}
