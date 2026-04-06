<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateAgentRuntime;

trait CreateAgentRuntimeTrait
{
    /**
     * @param CreateAgentRuntimeRequest $args
     * @return CreateAgentRuntimeResponse
     */
    public function createAgentRuntime(CreateAgentRuntimeRequest $args)
    {
        $result = parent::createAgentRuntime($args->toArray());
        return new CreateAgentRuntimeResponse($result->toArray());
    }
}
