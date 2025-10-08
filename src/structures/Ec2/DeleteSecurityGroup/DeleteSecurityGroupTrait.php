<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteSecurityGroup;

trait DeleteSecurityGroupTrait
{
    /**
     * @param DeleteSecurityGroupRequest $args
     * @return DeleteSecurityGroupResponse
     */
    public function deleteSecurityGroup(DeleteSecurityGroupRequest $args)
    {
        $result = parent::deleteSecurityGroup($args->toArray());
        return new DeleteSecurityGroupResponse($result->toArray());
    }
}
