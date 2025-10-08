<?php

namespace Sunaoka\Aws\Structures\AuditManager\DeleteAssessmentFramework;

trait DeleteAssessmentFrameworkTrait
{
    /**
     * @param DeleteAssessmentFrameworkRequest $args
     * @return DeleteAssessmentFrameworkResponse
     */
    public function deleteAssessmentFramework(DeleteAssessmentFrameworkRequest $args)
    {
        $result = parent::deleteAssessmentFramework($args->toArray());
        return new DeleteAssessmentFrameworkResponse($result->toArray());
    }
}
