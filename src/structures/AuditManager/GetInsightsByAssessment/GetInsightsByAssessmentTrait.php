<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetInsightsByAssessment;

trait GetInsightsByAssessmentTrait
{
    /**
     * @param GetInsightsByAssessmentRequest $args
     * @return GetInsightsByAssessmentResponse
     */
    public function getInsightsByAssessment(GetInsightsByAssessmentRequest $args)
    {
        $result = parent::getInsightsByAssessment($args->toArray());
        return new GetInsightsByAssessmentResponse($result->toArray());
    }
}
