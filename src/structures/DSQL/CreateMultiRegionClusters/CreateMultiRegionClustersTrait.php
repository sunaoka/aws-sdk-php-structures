<?php

namespace Sunaoka\Aws\Structures\DSQL\CreateMultiRegionClusters;

trait CreateMultiRegionClustersTrait
{
    /**
     * @param CreateMultiRegionClustersRequest $args
     * @return CreateMultiRegionClustersResponse
     */
    public function createMultiRegionClusters(CreateMultiRegionClustersRequest $args)
    {
        $result = parent::createMultiRegionClusters($args->toArray());
        return new CreateMultiRegionClustersResponse($result->toArray());
    }
}
