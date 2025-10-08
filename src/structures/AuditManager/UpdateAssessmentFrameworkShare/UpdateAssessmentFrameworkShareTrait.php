<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateAssessmentFrameworkShare;

trait UpdateAssessmentFrameworkShareTrait
{
    /**
     * @param UpdateAssessmentFrameworkShareRequest $args
     * @return UpdateAssessmentFrameworkShareResponse
     */
    public function updateAssessmentFrameworkShare(UpdateAssessmentFrameworkShareRequest $args)
    {
        $result = parent::updateAssessmentFrameworkShare($args->toArray());
        return new UpdateAssessmentFrameworkShareResponse($result->toArray());
    }
}
