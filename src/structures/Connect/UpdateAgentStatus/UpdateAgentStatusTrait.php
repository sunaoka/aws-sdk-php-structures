<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateAgentStatus;

trait UpdateAgentStatusTrait
{
    /**
     * @param UpdateAgentStatusRequest $args
     * @return void
     */
    public function updateAgentStatus(UpdateAgentStatusRequest $args)
    {
        parent::updateAgentStatus($args->toArray());
    }
}
