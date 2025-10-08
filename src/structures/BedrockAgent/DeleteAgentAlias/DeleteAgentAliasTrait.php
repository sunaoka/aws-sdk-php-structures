<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteAgentAlias;

trait DeleteAgentAliasTrait
{
    /**
     * @param DeleteAgentAliasRequest $args
     * @return DeleteAgentAliasResponse
     */
    public function deleteAgentAlias(DeleteAgentAliasRequest $args)
    {
        $result = parent::deleteAgentAlias($args->toArray());
        return new DeleteAgentAliasResponse($result->toArray());
    }
}
