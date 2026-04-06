<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\CreateInvocation;

trait CreateInvocationTrait
{
    /**
     * @param CreateInvocationRequest $args
     * @return CreateInvocationResponse
     */
    public function createInvocation(CreateInvocationRequest $args)
    {
        $result = parent::createInvocation($args->toArray());
        return new CreateInvocationResponse($result->toArray());
    }
}
