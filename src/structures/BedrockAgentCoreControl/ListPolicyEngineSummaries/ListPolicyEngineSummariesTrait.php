<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListPolicyEngineSummaries;

trait ListPolicyEngineSummariesTrait
{
    /**
     * @param ListPolicyEngineSummariesRequest $args
     * @return ListPolicyEngineSummariesResponse
     */
    public function listPolicyEngineSummaries(ListPolicyEngineSummariesRequest $args)
    {
        $result = parent::listPolicyEngineSummaries($args->toArray());
        return new ListPolicyEngineSummariesResponse($result->toArray());
    }
}
