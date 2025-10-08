<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListAssessmentControlInsightsByControlDomain;

trait ListAssessmentControlInsightsByControlDomainTrait
{
    /**
     * @param ListAssessmentControlInsightsByControlDomainRequest $args
     * @return ListAssessmentControlInsightsByControlDomainResponse
     */
    public function listAssessmentControlInsightsByControlDomain(ListAssessmentControlInsightsByControlDomainRequest $args)
    {
        $result = parent::listAssessmentControlInsightsByControlDomain($args->toArray());
        return new ListAssessmentControlInsightsByControlDomainResponse($result->toArray());
    }
}
