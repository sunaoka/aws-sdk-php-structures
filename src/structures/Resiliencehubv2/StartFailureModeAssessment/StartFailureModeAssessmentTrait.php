<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\StartFailureModeAssessment;

trait StartFailureModeAssessmentTrait
{
    /**
     * @param StartFailureModeAssessmentRequest $args
     * @return StartFailureModeAssessmentResponse
     */
    public function startFailureModeAssessment(StartFailureModeAssessmentRequest $args)
    {
        $result = parent::startFailureModeAssessment($args->toArray());
        return new StartFailureModeAssessmentResponse($result->toArray());
    }
}
