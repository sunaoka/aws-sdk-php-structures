<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteGameServerGroup;

trait DeleteGameServerGroupTrait
{
    /**
     * @param DeleteGameServerGroupRequest $args
     * @return DeleteGameServerGroupResponse
     */
    public function deleteGameServerGroup(DeleteGameServerGroupRequest $args)
    {
        $result = parent::deleteGameServerGroup($args->toArray());
        return new DeleteGameServerGroupResponse($result->toArray());
    }
}
