<?php

namespace Sunaoka\Aws\Structures\Inspector\ListAssessmentRunAgents;

trait ListAssessmentRunAgentsTrait
{
    /**
     * @param ListAssessmentRunAgentsRequest $args
     * @return ListAssessmentRunAgentsResponse
     */
    public function listAssessmentRunAgents(ListAssessmentRunAgentsRequest $args)
    {
        $result = parent::listAssessmentRunAgents($args->toArray());
        return new ListAssessmentRunAgentsResponse($result->toArray());
    }
}
