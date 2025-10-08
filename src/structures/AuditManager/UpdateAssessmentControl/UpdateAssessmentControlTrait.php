<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateAssessmentControl;

trait UpdateAssessmentControlTrait
{
    /**
     * @param UpdateAssessmentControlRequest $args
     * @return UpdateAssessmentControlResponse
     */
    public function updateAssessmentControl(UpdateAssessmentControlRequest $args)
    {
        $result = parent::updateAssessmentControl($args->toArray());
        return new UpdateAssessmentControlResponse($result->toArray());
    }
}
