<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteCacheSecurityGroup;

trait DeleteCacheSecurityGroupTrait
{
    /**
     * @param DeleteCacheSecurityGroupRequest $args
     * @return void
     */
    public function deleteCacheSecurityGroup(DeleteCacheSecurityGroupRequest $args)
    {
        parent::deleteCacheSecurityGroup($args->toArray());
    }
}
