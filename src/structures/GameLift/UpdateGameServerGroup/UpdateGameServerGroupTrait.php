<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateGameServerGroup;

trait UpdateGameServerGroupTrait
{
    /**
     * @param UpdateGameServerGroupRequest $args
     * @return UpdateGameServerGroupResponse
     */
    public function updateGameServerGroup(UpdateGameServerGroupRequest $args)
    {
        $result = parent::updateGameServerGroup($args->toArray());
        return new UpdateGameServerGroupResponse($result->toArray());
    }
}
