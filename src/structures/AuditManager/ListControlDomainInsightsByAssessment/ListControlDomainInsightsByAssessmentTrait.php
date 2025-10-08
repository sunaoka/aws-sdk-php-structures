<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListControlDomainInsightsByAssessment;

trait ListControlDomainInsightsByAssessmentTrait
{
    /**
     * @param ListControlDomainInsightsByAssessmentRequest $args
     * @return ListControlDomainInsightsByAssessmentResponse
     */
    public function listControlDomainInsightsByAssessment(ListControlDomainInsightsByAssessmentRequest $args)
    {
        $result = parent::listControlDomainInsightsByAssessment($args->toArray());
        return new ListControlDomainInsightsByAssessmentResponse($result->toArray());
    }
}
