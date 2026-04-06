<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListAgentAliases;

trait ListAgentAliasesTrait
{
    /**
     * @param ListAgentAliasesRequest $args
     * @return ListAgentAliasesResponse
     */
    public function listAgentAliases(ListAgentAliasesRequest $args)
    {
        $result = parent::listAgentAliases($args->toArray());
        return new ListAgentAliasesResponse($result->toArray());
    }
}
