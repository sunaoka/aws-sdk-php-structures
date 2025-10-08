<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateCacheSubnetGroup;

trait CreateCacheSubnetGroupTrait
{
    /**
     * @param CreateCacheSubnetGroupRequest $args
     * @return CreateCacheSubnetGroupResponse
     */
    public function createCacheSubnetGroup(CreateCacheSubnetGroupRequest $args)
    {
        $result = parent::createCacheSubnetGroup($args->toArray());
        return new CreateCacheSubnetGroupResponse($result->toArray());
    }
}
