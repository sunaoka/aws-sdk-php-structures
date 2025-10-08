<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateAssessmentStatus;

trait UpdateAssessmentStatusTrait
{
    /**
     * @param UpdateAssessmentStatusRequest $args
     * @return UpdateAssessmentStatusResponse
     */
    public function updateAssessmentStatus(UpdateAssessmentStatusRequest $args)
    {
        $result = parent::updateAssessmentStatus($args->toArray());
        return new UpdateAssessmentStatusResponse($result->toArray());
    }
}
