<?php

namespace Sunaoka\Aws\Structures\Inspector\ListAssessmentRuns;

trait ListAssessmentRunsTrait
{
    /**
     * @param ListAssessmentRunsRequest $args
     * @return ListAssessmentRunsResponse
     */
    public function listAssessmentRuns(ListAssessmentRunsRequest $args)
    {
        $result = parent::listAssessmentRuns($args->toArray());
        return new ListAssessmentRunsResponse($result->toArray());
    }
}
