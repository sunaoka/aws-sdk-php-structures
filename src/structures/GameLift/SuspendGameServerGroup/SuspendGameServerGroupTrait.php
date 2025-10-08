<?php

namespace Sunaoka\Aws\Structures\GameLift\SuspendGameServerGroup;

trait SuspendGameServerGroupTrait
{
    /**
     * @param SuspendGameServerGroupRequest $args
     * @return SuspendGameServerGroupResponse
     */
    public function suspendGameServerGroup(SuspendGameServerGroupRequest $args)
    {
        $result = parent::suspendGameServerGroup($args->toArray());
        return new SuspendGameServerGroupResponse($result->toArray());
    }
}
