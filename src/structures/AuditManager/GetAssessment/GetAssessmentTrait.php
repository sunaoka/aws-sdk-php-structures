<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetAssessment;

trait GetAssessmentTrait
{
    /**
     * @param GetAssessmentRequest $args
     * @return GetAssessmentResponse
     */
    public function getAssessment(GetAssessmentRequest $args)
    {
        $result = parent::getAssessment($args->toArray());
        return new GetAssessmentResponse($result->toArray());
    }
}
