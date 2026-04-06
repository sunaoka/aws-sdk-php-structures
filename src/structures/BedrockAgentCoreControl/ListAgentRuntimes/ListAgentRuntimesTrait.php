<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListAgentRuntimes;

trait ListAgentRuntimesTrait
{
    /**
     * @param ListAgentRuntimesRequest $args
     * @return ListAgentRuntimesResponse
     */
    public function listAgentRuntimes(ListAgentRuntimesRequest $args)
    {
        $result = parent::listAgentRuntimes($args->toArray());
        return new ListAgentRuntimesResponse($result->toArray());
    }
}
