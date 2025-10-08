<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\StartAppAssessment;

trait StartAppAssessmentTrait
{
    /**
     * @param StartAppAssessmentRequest $args
     * @return StartAppAssessmentResponse
     */
    public function startAppAssessment(StartAppAssessmentRequest $args)
    {
        $result = parent::startAppAssessment($args->toArray());
        return new StartAppAssessmentResponse($result->toArray());
    }
}
