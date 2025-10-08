<?php

namespace Sunaoka\Aws\Structures\AuditManager\BatchCreateDelegationByAssessment;

trait BatchCreateDelegationByAssessmentTrait
{
    /**
     * @param BatchCreateDelegationByAssessmentRequest $args
     * @return BatchCreateDelegationByAssessmentResponse
     */
    public function batchCreateDelegationByAssessment(BatchCreateDelegationByAssessmentRequest $args)
    {
        $result = parent::batchCreateDelegationByAssessment($args->toArray());
        return new BatchCreateDelegationByAssessmentResponse($result->toArray());
    }
}
