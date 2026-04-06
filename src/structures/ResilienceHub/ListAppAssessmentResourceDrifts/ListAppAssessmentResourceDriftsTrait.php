<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppAssessmentResourceDrifts;

trait ListAppAssessmentResourceDriftsTrait
{
    /**
     * @param ListAppAssessmentResourceDriftsRequest $args
     * @return ListAppAssessmentResourceDriftsResponse
     */
    public function listAppAssessmentResourceDrifts(ListAppAssessmentResourceDriftsRequest $args)
    {
        $result = parent::listAppAssessmentResourceDrifts($args->toArray());
        return new ListAppAssessmentResourceDriftsResponse($result->toArray());
    }
}
