<?php

namespace Sunaoka\Aws\Structures\GameLift\ResumeGameServerGroup;

trait ResumeGameServerGroupTrait
{
    /**
     * @param ResumeGameServerGroupRequest $args
     * @return ResumeGameServerGroupResponse
     */
    public function resumeGameServerGroup(ResumeGameServerGroupRequest $args)
    {
        $result = parent::resumeGameServerGroup($args->toArray());
        return new ResumeGameServerGroupResponse($result->toArray());
    }
}
