<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentContext;

trait GetAgentContextTrait
{
    /**
     * @param GetAgentContextRequest $args
     * @return GetAgentContextResponse
     */
    public function getAgentContext(GetAgentContextRequest $args)
    {
        $result = parent::getAgentContext($args->toArray());
        return new GetAgentContextResponse($result->toArray());
    }
}
