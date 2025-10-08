<?php

namespace Sunaoka\Aws\Structures\AuditManager\DeleteAssessmentFrameworkShare;

trait DeleteAssessmentFrameworkShareTrait
{
    /**
     * @param DeleteAssessmentFrameworkShareRequest $args
     * @return DeleteAssessmentFrameworkShareResponse
     */
    public function deleteAssessmentFrameworkShare(DeleteAssessmentFrameworkShareRequest $args)
    {
        $result = parent::deleteAssessmentFrameworkShare($args->toArray());
        return new DeleteAssessmentFrameworkShareResponse($result->toArray());
    }
}
