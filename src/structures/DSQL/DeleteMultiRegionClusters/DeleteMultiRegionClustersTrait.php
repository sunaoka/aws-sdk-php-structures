<?php

namespace Sunaoka\Aws\Structures\DSQL\DeleteMultiRegionClusters;

trait DeleteMultiRegionClustersTrait
{
    /**
     * @param DeleteMultiRegionClustersRequest $args
     * @return void
     */
    public function deleteMultiRegionClusters(DeleteMultiRegionClustersRequest $args)
    {
        parent::deleteMultiRegionClusters($args->toArray());
    }
}
