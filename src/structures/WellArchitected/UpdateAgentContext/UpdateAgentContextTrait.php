<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateAgentContext;

trait UpdateAgentContextTrait
{
    /**
     * @param UpdateAgentContextRequest $args
     * @return UpdateAgentContextResponse
     */
    public function updateAgentContext(UpdateAgentContextRequest $args)
    {
        $result = parent::updateAgentContext($args->toArray());
        return new UpdateAgentContextResponse($result->toArray());
    }
}
