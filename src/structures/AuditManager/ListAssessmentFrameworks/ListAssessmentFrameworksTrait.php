<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListAssessmentFrameworks;

trait ListAssessmentFrameworksTrait
{
    /**
     * @param ListAssessmentFrameworksRequest $args
     * @return ListAssessmentFrameworksResponse
     */
    public function listAssessmentFrameworks(ListAssessmentFrameworksRequest $args)
    {
        $result = parent::listAssessmentFrameworks($args->toArray());
        return new ListAssessmentFrameworksResponse($result->toArray());
    }
}
