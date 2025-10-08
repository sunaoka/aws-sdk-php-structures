<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListAssessmentFrameworkShareRequests;

trait ListAssessmentFrameworkShareRequestsTrait
{
    /**
     * @param ListAssessmentFrameworkShareRequestsRequest $args
     * @return ListAssessmentFrameworkShareRequestsResponse
     */
    public function listAssessmentFrameworkShareRequests(ListAssessmentFrameworkShareRequestsRequest $args)
    {
        $result = parent::listAssessmentFrameworkShareRequests($args->toArray());
        return new ListAssessmentFrameworkShareRequestsResponse($result->toArray());
    }
}
