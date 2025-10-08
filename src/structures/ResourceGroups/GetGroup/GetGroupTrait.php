<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\GetGroup;

trait GetGroupTrait
{
    /**
     * @param GetGroupRequest $args
     * @return GetGroupResponse
     */
    public function getGroup(GetGroupRequest $args)
    {
        $result = parent::getGroup($args->toArray());
        return new GetGroupResponse($result->toArray());
    }
}
