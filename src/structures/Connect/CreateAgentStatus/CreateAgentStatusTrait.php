<?php

namespace Sunaoka\Aws\Structures\Connect\CreateAgentStatus;

trait CreateAgentStatusTrait
{
    /**
     * @param CreateAgentStatusRequest $args
     * @return CreateAgentStatusResponse
     */
    public function createAgentStatus(CreateAgentStatusRequest $args)
    {
        $result = parent::createAgentStatus($args->toArray());
        return new CreateAgentStatusResponse($result->toArray());
    }
}
