<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateAgentContext;

trait CreateAgentContextTrait
{
    /**
     * @param CreateAgentContextRequest $args
     * @return CreateAgentContextResponse
     */
    public function createAgentContext(CreateAgentContextRequest $args)
    {
        $result = parent::createAgentContext($args->toArray());
        return new CreateAgentContextResponse($result->toArray());
    }
}
