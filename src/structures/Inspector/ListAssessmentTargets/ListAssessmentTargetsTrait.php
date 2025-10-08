<?php

namespace Sunaoka\Aws\Structures\Inspector\ListAssessmentTargets;

trait ListAssessmentTargetsTrait
{
    /**
     * @param ListAssessmentTargetsRequest $args
     * @return ListAssessmentTargetsResponse
     */
    public function listAssessmentTargets(ListAssessmentTargetsRequest $args)
    {
        $result = parent::listAssessmentTargets($args->toArray());
        return new ListAssessmentTargetsResponse($result->toArray());
    }
}
