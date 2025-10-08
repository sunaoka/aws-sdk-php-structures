<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ResetCacheParameterGroup;

trait ResetCacheParameterGroupTrait
{
    /**
     * @param ResetCacheParameterGroupRequest $args
     * @return ResetCacheParameterGroupResponse
     */
    public function resetCacheParameterGroup(ResetCacheParameterGroupRequest $args)
    {
        $result = parent::resetCacheParameterGroup($args->toArray());
        return new ResetCacheParameterGroupResponse($result->toArray());
    }
}
