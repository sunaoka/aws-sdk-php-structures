<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ListADAssessments;

trait ListADAssessmentsTrait
{
    /**
     * @param ListADAssessmentsRequest $args
     * @return ListADAssessmentsResponse
     */
    public function listADAssessments(ListADAssessmentsRequest $args)
    {
        $result = parent::listADAssessments($args->toArray());
        return new ListADAssessmentsResponse($result->toArray());
    }
}
