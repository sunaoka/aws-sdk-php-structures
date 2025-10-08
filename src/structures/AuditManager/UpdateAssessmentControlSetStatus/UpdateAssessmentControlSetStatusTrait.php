<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateAssessmentControlSetStatus;

trait UpdateAssessmentControlSetStatusTrait
{
    /**
     * @param UpdateAssessmentControlSetStatusRequest $args
     * @return UpdateAssessmentControlSetStatusResponse
     */
    public function updateAssessmentControlSetStatus(UpdateAssessmentControlSetStatusRequest $args)
    {
        $result = parent::updateAssessmentControlSetStatus($args->toArray());
        return new UpdateAssessmentControlSetStatusResponse($result->toArray());
    }
}
