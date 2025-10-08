<?php

namespace Sunaoka\Aws\Structures\Inspector\DeleteAssessmentRun;

trait DeleteAssessmentRunTrait
{
    /**
     * @param DeleteAssessmentRunRequest $args
     * @return void
     */
    public function deleteAssessmentRun(DeleteAssessmentRunRequest $args)
    {
        parent::deleteAssessmentRun($args->toArray());
    }
}
