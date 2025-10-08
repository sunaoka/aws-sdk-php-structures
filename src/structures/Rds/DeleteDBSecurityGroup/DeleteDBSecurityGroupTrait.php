<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBSecurityGroup;

trait DeleteDBSecurityGroupTrait
{
    /**
     * @param DeleteDBSecurityGroupRequest $args
     * @return void
     */
    public function deleteDBSecurityGroup(DeleteDBSecurityGroupRequest $args)
    {
        parent::deleteDBSecurityGroup($args->toArray());
    }
}
