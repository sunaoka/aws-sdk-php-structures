<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListPolicySummaries;

trait ListPolicySummariesTrait
{
    /**
     * @param ListPolicySummariesRequest $args
     * @return ListPolicySummariesResponse
     */
    public function listPolicySummaries(ListPolicySummariesRequest $args)
    {
        $result = parent::listPolicySummaries($args->toArray());
        return new ListPolicySummariesResponse($result->toArray());
    }
}
