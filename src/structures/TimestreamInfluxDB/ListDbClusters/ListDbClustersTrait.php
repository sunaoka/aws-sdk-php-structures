<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\ListDbClusters;

trait ListDbClustersTrait
{
    /**
     * @param ListDbClustersRequest $args
     * @return ListDbClustersResponse
     */
    public function listDbClusters(ListDbClustersRequest $args)
    {
        $result = parent::listDbClusters($args->toArray());
        return new ListDbClustersResponse($result->toArray());
    }
}
