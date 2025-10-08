<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSecurityGroup;

trait CreateSecurityGroupTrait
{
    /**
     * @param CreateSecurityGroupRequest $args
     * @return CreateSecurityGroupResponse
     */
    public function createSecurityGroup(CreateSecurityGroupRequest $args)
    {
        $result = parent::createSecurityGroup($args->toArray());
        return new CreateSecurityGroupResponse($result->toArray());
    }
}
