<?php

namespace Sunaoka\Aws\Structures\Wickr\UpdateSecurityGroup;

trait UpdateSecurityGroupTrait
{
    /**
     * @param UpdateSecurityGroupRequest $args
     * @return UpdateSecurityGroupResponse
     */
    public function updateSecurityGroup(UpdateSecurityGroupRequest $args)
    {
        $result = parent::updateSecurityGroup($args->toArray());
        return new UpdateSecurityGroupResponse($result->toArray());
    }
}
