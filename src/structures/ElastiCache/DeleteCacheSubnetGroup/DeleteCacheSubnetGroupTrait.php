<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteCacheSubnetGroup;

trait DeleteCacheSubnetGroupTrait
{
    /**
     * @param DeleteCacheSubnetGroupRequest $args
     * @return void
     */
    public function deleteCacheSubnetGroup(DeleteCacheSubnetGroupRequest $args)
    {
        parent::deleteCacheSubnetGroup($args->toArray());
    }
}
