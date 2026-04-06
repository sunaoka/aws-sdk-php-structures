<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateAgentRuntime;

trait UpdateAgentRuntimeTrait
{
    /**
     * @param UpdateAgentRuntimeRequest $args
     * @return UpdateAgentRuntimeResponse
     */
    public function updateAgentRuntime(UpdateAgentRuntimeRequest $args)
    {
        $result = parent::updateAgentRuntime($args->toArray());
        return new UpdateAgentRuntimeResponse($result->toArray());
    }
}
