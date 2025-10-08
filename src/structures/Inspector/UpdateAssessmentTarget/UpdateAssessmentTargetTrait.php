<?php

namespace Sunaoka\Aws\Structures\Inspector\UpdateAssessmentTarget;

trait UpdateAssessmentTargetTrait
{
    /**
     * @param UpdateAssessmentTargetRequest $args
     * @return void
     */
    public function updateAssessmentTarget(UpdateAssessmentTargetRequest $args)
    {
        parent::updateAssessmentTarget($args->toArray());
    }
}
