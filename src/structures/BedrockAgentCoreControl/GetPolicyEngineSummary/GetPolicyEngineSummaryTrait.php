<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetPolicyEngineSummary;

trait GetPolicyEngineSummaryTrait
{
    /**
     * @param GetPolicyEngineSummaryRequest $args
     * @return GetPolicyEngineSummaryResponse
     */
    public function getPolicyEngineSummary(GetPolicyEngineSummaryRequest $args)
    {
        $result = parent::getPolicyEngineSummary($args->toArray());
        return new GetPolicyEngineSummaryResponse($result->toArray());
    }
}
