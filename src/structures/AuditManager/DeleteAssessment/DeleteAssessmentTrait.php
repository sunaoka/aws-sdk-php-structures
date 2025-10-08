<?php

namespace Sunaoka\Aws\Structures\AuditManager\DeleteAssessment;

trait DeleteAssessmentTrait
{
    /**
     * @param DeleteAssessmentRequest $args
     * @return DeleteAssessmentResponse
     */
    public function deleteAssessment(DeleteAssessmentRequest $args)
    {
        $result = parent::deleteAssessment($args->toArray());
        return new DeleteAssessmentResponse($result->toArray());
    }
}
