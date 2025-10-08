<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\PutInvocationStep;

trait PutInvocationStepTrait
{
    /**
     * @param PutInvocationStepRequest $args
     * @return PutInvocationStepResponse
     */
    public function putInvocationStep(PutInvocationStepRequest $args)
    {
        $result = parent::putInvocationStep($args->toArray());
        return new PutInvocationStepResponse($result->toArray());
    }
}
