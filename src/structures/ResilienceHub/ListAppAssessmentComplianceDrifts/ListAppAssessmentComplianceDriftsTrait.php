<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppAssessmentComplianceDrifts;

trait ListAppAssessmentComplianceDriftsTrait
{
    /**
     * @param ListAppAssessmentComplianceDriftsRequest $args
     * @return ListAppAssessmentComplianceDriftsResponse
     */
    public function listAppAssessmentComplianceDrifts(ListAppAssessmentComplianceDriftsRequest $args)
    {
        $result = parent::listAppAssessmentComplianceDrifts($args->toArray());
        return new ListAppAssessmentComplianceDriftsResponse($result->toArray());
    }
}
