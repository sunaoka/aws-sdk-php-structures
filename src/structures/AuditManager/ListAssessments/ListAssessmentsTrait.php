<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListAssessments;

trait ListAssessmentsTrait
{
    /**
     * @param ListAssessmentsRequest $args
     * @return ListAssessmentsResponse
     */
    public function listAssessments(ListAssessmentsRequest $args)
    {
        $result = parent::listAssessments($args->toArray());
        return new ListAssessmentsResponse($result->toArray());
    }
}
