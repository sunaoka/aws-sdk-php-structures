<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteSecurityGroup;

trait DeleteSecurityGroupTrait
{
    /**
     * @param DeleteSecurityGroupRequest $args
     * @return void
     */
    public function deleteSecurityGroup(DeleteSecurityGroupRequest $args)
    {
        parent::deleteSecurityGroup($args->toArray());
    }
}
