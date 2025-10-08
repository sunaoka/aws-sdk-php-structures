<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteInputSecurityGroup;

trait DeleteInputSecurityGroupTrait
{
    /**
     * @param DeleteInputSecurityGroupRequest $args
     * @return DeleteInputSecurityGroupResponse
     */
    public function deleteInputSecurityGroup(DeleteInputSecurityGroupRequest $args)
    {
        $result = parent::deleteInputSecurityGroup($args->toArray());
        return new DeleteInputSecurityGroupResponse($result->toArray());
    }
}
