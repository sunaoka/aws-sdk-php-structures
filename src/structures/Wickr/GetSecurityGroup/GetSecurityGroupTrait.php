<?php

namespace Sunaoka\Aws\Structures\Wickr\GetSecurityGroup;

trait GetSecurityGroupTrait
{
    /**
     * @param GetSecurityGroupRequest $args
     * @return GetSecurityGroupResponse
     */
    public function getSecurityGroup(GetSecurityGroupRequest $args)
    {
        $result = parent::getSecurityGroup($args->toArray());
        return new GetSecurityGroupResponse($result->toArray());
    }
}
