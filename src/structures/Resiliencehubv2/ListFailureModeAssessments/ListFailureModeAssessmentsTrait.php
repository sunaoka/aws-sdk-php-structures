<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListFailureModeAssessments;

trait ListFailureModeAssessmentsTrait
{
    /**
     * @param ListFailureModeAssessmentsRequest $args
     * @return ListFailureModeAssessmentsResponse
     */
    public function listFailureModeAssessments(ListFailureModeAssessmentsRequest $args)
    {
        $result = parent::listFailureModeAssessments($args->toArray());
        return new ListFailureModeAssessmentsResponse($result->toArray());
    }
}
