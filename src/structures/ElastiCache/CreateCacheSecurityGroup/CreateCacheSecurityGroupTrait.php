<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateCacheSecurityGroup;

trait CreateCacheSecurityGroupTrait
{
    /**
     * @param CreateCacheSecurityGroupRequest $args
     * @return CreateCacheSecurityGroupResponse
     */
    public function createCacheSecurityGroup(CreateCacheSecurityGroupRequest $args)
    {
        $result = parent::createCacheSecurityGroup($args->toArray());
        return new CreateCacheSecurityGroupResponse($result->toArray());
    }
}
