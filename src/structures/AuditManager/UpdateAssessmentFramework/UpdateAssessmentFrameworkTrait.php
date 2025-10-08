<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateAssessmentFramework;

trait UpdateAssessmentFrameworkTrait
{
    /**
     * @param UpdateAssessmentFrameworkRequest $args
     * @return UpdateAssessmentFrameworkResponse
     */
    public function updateAssessmentFramework(UpdateAssessmentFrameworkRequest $args)
    {
        $result = parent::updateAssessmentFramework($args->toArray());
        return new UpdateAssessmentFrameworkResponse($result->toArray());
    }
}
