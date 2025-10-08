<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListInvocationSteps;

trait ListInvocationStepsTrait
{
    /**
     * @param ListInvocationStepsRequest $args
     * @return ListInvocationStepsResponse
     */
    public function listInvocationSteps(ListInvocationStepsRequest $args)
    {
        $result = parent::listInvocationSteps($args->toArray());
        return new ListInvocationStepsResponse($result->toArray());
    }
}
