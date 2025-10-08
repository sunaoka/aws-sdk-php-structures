<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyCacheParameterGroup;

trait ModifyCacheParameterGroupTrait
{
    /**
     * @param ModifyCacheParameterGroupRequest $args
     * @return ModifyCacheParameterGroupResponse
     */
    public function modifyCacheParameterGroup(ModifyCacheParameterGroupRequest $args)
    {
        $result = parent::modifyCacheParameterGroup($args->toArray());
        return new ModifyCacheParameterGroupResponse($result->toArray());
    }
}
