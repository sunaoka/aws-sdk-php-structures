<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgentAlias;

trait UpdateAgentAliasTrait
{
    /**
     * @param UpdateAgentAliasRequest $args
     * @return UpdateAgentAliasResponse
     */
    public function updateAgentAlias(UpdateAgentAliasRequest $args)
    {
        $result = parent::updateAgentAlias($args->toArray());
        return new UpdateAgentAliasResponse($result->toArray());
    }
}
