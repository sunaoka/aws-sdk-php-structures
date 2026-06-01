<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAgent;

trait UpdateAgentTrait
{
    /**
     * @param UpdateAgentRequest $args
     * @return UpdateAgentResponse
     */
    public function updateAgent(UpdateAgentRequest $args)
    {
        $result = parent::updateAgent($args->toArray());
        return new UpdateAgentResponse($result->toArray());
    }
}
