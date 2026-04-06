<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetAgentRuntime;

trait GetAgentRuntimeTrait
{
    /**
     * @param GetAgentRuntimeRequest $args
     * @return GetAgentRuntimeResponse
     */
    public function getAgentRuntime(GetAgentRuntimeRequest $args)
    {
        $result = parent::getAgentRuntime($args->toArray());
        return new GetAgentRuntimeResponse($result->toArray());
    }
}
