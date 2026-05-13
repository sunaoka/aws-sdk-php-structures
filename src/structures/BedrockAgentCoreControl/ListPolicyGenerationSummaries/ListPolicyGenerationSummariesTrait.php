<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListPolicyGenerationSummaries;

trait ListPolicyGenerationSummariesTrait
{
    /**
     * @param ListPolicyGenerationSummariesRequest $args
     * @return ListPolicyGenerationSummariesResponse
     */
    public function listPolicyGenerationSummaries(ListPolicyGenerationSummariesRequest $args)
    {
        $result = parent::listPolicyGenerationSummaries($args->toArray());
        return new ListPolicyGenerationSummariesResponse($result->toArray());
    }
}
