<?php

namespace Sunaoka\Aws\Structures\DSQL\ListClusters;

trait ListClustersTrait
{
    /**
     * @param ListClustersRequest $args
     * @return ListClustersResponse
     */
    public function listClusters(ListClustersRequest $args)
    {
        $result = parent::listClusters($args->toArray());
        return new ListClustersResponse($result->toArray());
    }
}
