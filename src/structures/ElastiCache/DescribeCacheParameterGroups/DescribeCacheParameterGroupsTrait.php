<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheParameterGroups;

trait DescribeCacheParameterGroupsTrait
{
    /**
     * @param DescribeCacheParameterGroupsRequest $args
     * @return DescribeCacheParameterGroupsResponse
     */
    public function describeCacheParameterGroups(DescribeCacheParameterGroupsRequest $args)
    {
        $result = parent::describeCacheParameterGroups($args->toArray());
        return new DescribeCacheParameterGroupsResponse($result->toArray());
    }
}
