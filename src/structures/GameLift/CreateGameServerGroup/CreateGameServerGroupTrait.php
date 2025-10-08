<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateGameServerGroup;

trait CreateGameServerGroupTrait
{
    /**
     * @param CreateGameServerGroupRequest $args
     * @return CreateGameServerGroupResponse
     */
    public function createGameServerGroup(CreateGameServerGroupRequest $args)
    {
        $result = parent::createGameServerGroup($args->toArray());
        return new CreateGameServerGroupResponse($result->toArray());
    }
}
