<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheClusters;

trait DescribeCacheClustersTrait
{
    /**
     * @param DescribeCacheClustersRequest $args
     * @return DescribeCacheClustersResponse
     */
    public function describeCacheClusters(DescribeCacheClustersRequest $args)
    {
        $result = parent::describeCacheClusters($args->toArray());
        return new DescribeCacheClustersResponse($result->toArray());
    }
}
