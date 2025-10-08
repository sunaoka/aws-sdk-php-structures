<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateAssessment;

trait UpdateAssessmentTrait
{
    /**
     * @param UpdateAssessmentRequest $args
     * @return UpdateAssessmentResponse
     */
    public function updateAssessment(UpdateAssessmentRequest $args)
    {
        $result = parent::updateAssessment($args->toArray());
        return new UpdateAssessmentResponse($result->toArray());
    }
}
