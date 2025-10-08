<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheSecurityGroups;

trait DescribeCacheSecurityGroupsTrait
{
    /**
     * @param DescribeCacheSecurityGroupsRequest $args
     * @return DescribeCacheSecurityGroupsResponse
     */
    public function describeCacheSecurityGroups(DescribeCacheSecurityGroupsRequest $args)
    {
        $result = parent::describeCacheSecurityGroups($args->toArray());
        return new DescribeCacheSecurityGroupsResponse($result->toArray());
    }
}
