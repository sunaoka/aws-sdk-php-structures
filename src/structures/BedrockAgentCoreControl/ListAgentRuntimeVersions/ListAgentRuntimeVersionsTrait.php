<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListAgentRuntimeVersions;

trait ListAgentRuntimeVersionsTrait
{
    /**
     * @param ListAgentRuntimeVersionsRequest $args
     * @return ListAgentRuntimeVersionsResponse
     */
    public function listAgentRuntimeVersions(ListAgentRuntimeVersionsRequest $args)
    {
        $result = parent::listAgentRuntimeVersions($args->toArray());
        return new ListAgentRuntimeVersionsResponse($result->toArray());
    }
}
