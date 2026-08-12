<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DeleteAgentContext;

trait DeleteAgentContextTrait
{
    /**
     * @param DeleteAgentContextRequest $args
     * @return DeleteAgentContextResponse
     */
    public function deleteAgentContext(DeleteAgentContextRequest $args)
    {
        $result = parent::deleteAgentContext($args->toArray());
        return new DeleteAgentContextResponse($result->toArray());
    }
}
