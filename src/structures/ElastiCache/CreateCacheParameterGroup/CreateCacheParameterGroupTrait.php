<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateCacheParameterGroup;

trait CreateCacheParameterGroupTrait
{
    /**
     * @param CreateCacheParameterGroupRequest $args
     * @return CreateCacheParameterGroupResponse
     */
    public function createCacheParameterGroup(CreateCacheParameterGroupRequest $args)
    {
        $result = parent::createCacheParameterGroup($args->toArray());
        return new CreateCacheParameterGroupResponse($result->toArray());
    }
}
