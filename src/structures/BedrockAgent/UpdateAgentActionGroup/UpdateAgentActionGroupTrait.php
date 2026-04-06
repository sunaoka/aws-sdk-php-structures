<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgentActionGroup;

trait UpdateAgentActionGroupTrait
{
    /**
     * @param UpdateAgentActionGroupRequest $args
     * @return UpdateAgentActionGroupResponse
     */
    public function updateAgentActionGroup(UpdateAgentActionGroupRequest $args)
    {
        $result = parent::updateAgentActionGroup($args->toArray());
        return new UpdateAgentActionGroupResponse($result->toArray());
    }
}
