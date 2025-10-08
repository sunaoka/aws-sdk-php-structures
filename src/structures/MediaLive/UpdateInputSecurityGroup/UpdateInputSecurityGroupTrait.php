<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInputSecurityGroup;

trait UpdateInputSecurityGroupTrait
{
    /**
     * @param UpdateInputSecurityGroupRequest $args
     * @return UpdateInputSecurityGroupResponse
     */
    public function updateInputSecurityGroup(UpdateInputSecurityGroupRequest $args)
    {
        $result = parent::updateInputSecurityGroup($args->toArray());
        return new UpdateInputSecurityGroupResponse($result->toArray());
    }
}
