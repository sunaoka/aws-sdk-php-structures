<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentActionGroup;

trait GetAgentActionGroupTrait
{
    /**
     * @param GetAgentActionGroupRequest $args
     * @return GetAgentActionGroupResponse
     */
    public function getAgentActionGroup(GetAgentActionGroupRequest $args)
    {
        $result = parent::getAgentActionGroup($args->toArray());
        return new GetAgentActionGroupResponse($result->toArray());
    }
}
