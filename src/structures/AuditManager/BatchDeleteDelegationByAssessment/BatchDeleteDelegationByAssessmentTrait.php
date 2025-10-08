<?php

namespace Sunaoka\Aws\Structures\AuditManager\BatchDeleteDelegationByAssessment;

trait BatchDeleteDelegationByAssessmentTrait
{
    /**
     * @param BatchDeleteDelegationByAssessmentRequest $args
     * @return BatchDeleteDelegationByAssessmentResponse
     */
    public function batchDeleteDelegationByAssessment(BatchDeleteDelegationByAssessmentRequest $args)
    {
        $result = parent::batchDeleteDelegationByAssessment($args->toArray());
        return new BatchDeleteDelegationByAssessmentResponse($result->toArray());
    }
}
