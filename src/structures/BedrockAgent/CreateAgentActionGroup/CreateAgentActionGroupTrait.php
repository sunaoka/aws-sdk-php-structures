<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateAgentActionGroup;

trait CreateAgentActionGroupTrait
{
    /**
     * @param CreateAgentActionGroupRequest $args
     * @return CreateAgentActionGroupResponse
     */
    public function createAgentActionGroup(CreateAgentActionGroupRequest $args)
    {
        $result = parent::createAgentActionGroup($args->toArray());
        return new CreateAgentActionGroupResponse($result->toArray());
    }
}
