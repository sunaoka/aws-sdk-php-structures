<?php

namespace Sunaoka\Aws\Structures\Kafka\ListAssessmentFindings;

trait ListAssessmentFindingsTrait
{
    /**
     * @param ListAssessmentFindingsRequest $args
     * @return ListAssessmentFindingsResponse
     */
    public function listAssessmentFindings(ListAssessmentFindingsRequest $args)
    {
        $result = parent::listAssessmentFindings($args->toArray());
        return new ListAssessmentFindingsResponse($result->toArray());
    }
}
