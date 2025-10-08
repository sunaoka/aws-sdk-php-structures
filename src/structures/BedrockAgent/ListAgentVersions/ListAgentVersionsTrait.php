<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListAgentVersions;

trait ListAgentVersionsTrait
{
    /**
     * @param ListAgentVersionsRequest $args
     * @return ListAgentVersionsResponse
     */
    public function listAgentVersions(ListAgentVersionsRequest $args)
    {
        $result = parent::listAgentVersions($args->toArray());
        return new ListAgentVersionsResponse($result->toArray());
    }
}
