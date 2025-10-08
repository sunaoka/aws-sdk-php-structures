<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppAssessments;

trait ListAppAssessmentsTrait
{
    /**
     * @param ListAppAssessmentsRequest $args
     * @return ListAppAssessmentsResponse
     */
    public function listAppAssessments(ListAppAssessmentsRequest $args)
    {
        $result = parent::listAppAssessments($args->toArray());
        return new ListAppAssessmentsResponse($result->toArray());
    }
}
