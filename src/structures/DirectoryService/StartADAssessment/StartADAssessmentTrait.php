<?php

namespace Sunaoka\Aws\Structures\DirectoryService\StartADAssessment;

trait StartADAssessmentTrait
{
    /**
     * @param StartADAssessmentRequest $args
     * @return StartADAssessmentResponse
     */
    public function startADAssessment(StartADAssessmentRequest $args)
    {
        $result = parent::startADAssessment($args->toArray());
        return new StartADAssessmentResponse($result->toArray());
    }
}
