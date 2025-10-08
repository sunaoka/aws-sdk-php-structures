<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyCacheSubnetGroup;

trait ModifyCacheSubnetGroupTrait
{
    /**
     * @param ModifyCacheSubnetGroupRequest $args
     * @return ModifyCacheSubnetGroupResponse
     */
    public function modifyCacheSubnetGroup(ModifyCacheSubnetGroupRequest $args)
    {
        $result = parent::modifyCacheSubnetGroup($args->toArray());
        return new ModifyCacheSubnetGroupResponse($result->toArray());
    }
}
