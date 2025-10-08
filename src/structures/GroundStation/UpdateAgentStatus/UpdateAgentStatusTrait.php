<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateAgentStatus;

trait UpdateAgentStatusTrait
{
    /**
     * @param UpdateAgentStatusRequest $args
     * @return UpdateAgentStatusResponse
     */
    public function updateAgentStatus(UpdateAgentStatusRequest $args)
    {
        $result = parent::updateAgentStatus($args->toArray());
        return new UpdateAgentStatusResponse($result->toArray());
    }
}
