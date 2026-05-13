<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetPolicyGenerationSummary;

trait GetPolicyGenerationSummaryTrait
{
    /**
     * @param GetPolicyGenerationSummaryRequest $args
     * @return GetPolicyGenerationSummaryResponse
     */
    public function getPolicyGenerationSummary(GetPolicyGenerationSummaryRequest $args)
    {
        $result = parent::getPolicyGenerationSummary($args->toArray());
        return new GetPolicyGenerationSummaryResponse($result->toArray());
    }
}
