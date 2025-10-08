<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteAgentActionGroup;

trait DeleteAgentActionGroupTrait
{
    /**
     * @param DeleteAgentActionGroupRequest $args
     * @return DeleteAgentActionGroupResponse
     */
    public function deleteAgentActionGroup(DeleteAgentActionGroupRequest $args)
    {
        $result = parent::deleteAgentActionGroup($args->toArray());
        return new DeleteAgentActionGroupResponse($result->toArray());
    }
}
