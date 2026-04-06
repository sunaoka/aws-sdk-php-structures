<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentAlias;

trait GetAgentAliasTrait
{
    /**
     * @param GetAgentAliasRequest $args
     * @return GetAgentAliasResponse
     */
    public function getAgentAlias(GetAgentAliasRequest $args)
    {
        $result = parent::getAgentAlias($args->toArray());
        return new GetAgentAliasResponse($result->toArray());
    }
}
