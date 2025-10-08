<?php

namespace Sunaoka\Aws\Structures\Inspector\StartAssessmentRun;

trait StartAssessmentRunTrait
{
    /**
     * @param StartAssessmentRunRequest $args
     * @return StartAssessmentRunResponse
     */
    public function startAssessmentRun(StartAssessmentRunRequest $args)
    {
        $result = parent::startAssessmentRun($args->toArray());
        return new StartAssessmentRunResponse($result->toArray());
    }
}
