<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheSubnetGroups;

trait DescribeCacheSubnetGroupsTrait
{
    /**
     * @param DescribeCacheSubnetGroupsRequest $args
     * @return DescribeCacheSubnetGroupsResponse
     */
    public function describeCacheSubnetGroups(DescribeCacheSubnetGroupsRequest $args)
    {
        $result = parent::describeCacheSubnetGroups($args->toArray());
        return new DescribeCacheSubnetGroupsResponse($result->toArray());
    }
}
