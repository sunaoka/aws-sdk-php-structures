<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateClusterSecurityGroup;

trait CreateClusterSecurityGroupTrait
{
    /**
     * @param CreateClusterSecurityGroupRequest $args
     * @return CreateClusterSecurityGroupResponse
     */
    public function createClusterSecurityGroup(CreateClusterSecurityGroupRequest $args)
    {
        $result = parent::createClusterSecurityGroup($args->toArray());
        return new CreateClusterSecurityGroupResponse($result->toArray());
    }
}
