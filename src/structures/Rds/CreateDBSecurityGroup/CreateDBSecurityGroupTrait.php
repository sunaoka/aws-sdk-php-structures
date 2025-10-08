<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBSecurityGroup;

trait CreateDBSecurityGroupTrait
{
    /**
     * @param CreateDBSecurityGroupRequest $args
     * @return CreateDBSecurityGroupResponse
     */
    public function createDBSecurityGroup(CreateDBSecurityGroupRequest $args)
    {
        $result = parent::createDBSecurityGroup($args->toArray());
        return new CreateDBSecurityGroupResponse($result->toArray());
    }
}
