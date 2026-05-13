<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetPolicySummary;

trait GetPolicySummaryTrait
{
    /**
     * @param GetPolicySummaryRequest $args
     * @return GetPolicySummaryResponse
     */
    public function getPolicySummary(GetPolicySummaryRequest $args)
    {
        $result = parent::getPolicySummary($args->toArray());
        return new GetPolicySummaryResponse($result->toArray());
    }
}
