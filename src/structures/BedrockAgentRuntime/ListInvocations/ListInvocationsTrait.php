<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListInvocations;

trait ListInvocationsTrait
{
    /**
     * @param ListInvocationsRequest $args
     * @return ListInvocationsResponse
     */
    public function listInvocations(ListInvocationsRequest $args)
    {
        $result = parent::listInvocations($args->toArray());
        return new ListInvocationsResponse($result->toArray());
    }
}
