<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetInvocationStep;

trait GetInvocationStepTrait
{
    /**
     * @param GetInvocationStepRequest $args
     * @return GetInvocationStepResponse
     */
    public function getInvocationStep(GetInvocationStepRequest $args)
    {
        $result = parent::getInvocationStep($args->toArray());
        return new GetInvocationStepResponse($result->toArray());
    }
}
