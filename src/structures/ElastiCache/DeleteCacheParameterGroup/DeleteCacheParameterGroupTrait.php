<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteCacheParameterGroup;

trait DeleteCacheParameterGroupTrait
{
    /**
     * @param DeleteCacheParameterGroupRequest $args
     * @return void
     */
    public function deleteCacheParameterGroup(DeleteCacheParameterGroupRequest $args)
    {
        parent::deleteCacheParameterGroup($args->toArray());
    }
}
