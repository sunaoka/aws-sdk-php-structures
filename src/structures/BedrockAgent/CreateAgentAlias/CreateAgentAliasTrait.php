<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateAgentAlias;

trait CreateAgentAliasTrait
{
    /**
     * @param CreateAgentAliasRequest $args
     * @return CreateAgentAliasResponse
     */
    public function createAgentAlias(CreateAgentAliasRequest $args)
    {
        $result = parent::createAgentAlias($args->toArray());
        return new CreateAgentAliasResponse($result->toArray());
    }
}
