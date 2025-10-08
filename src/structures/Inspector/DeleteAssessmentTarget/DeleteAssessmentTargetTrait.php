<?php

namespace Sunaoka\Aws\Structures\Inspector\DeleteAssessmentTarget;

trait DeleteAssessmentTargetTrait
{
    /**
     * @param DeleteAssessmentTargetRequest $args
     * @return void
     */
    public function deleteAssessmentTarget(DeleteAssessmentTargetRequest $args)
    {
        parent::deleteAssessmentTarget($args->toArray());
    }
}
