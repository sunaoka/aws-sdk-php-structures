<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxClusters;

trait ListKxClustersTrait
{
    /**
     * @param ListKxClustersRequest $args
     * @return ListKxClustersResponse
     */
    public function listKxClusters(ListKxClustersRequest $args)
    {
        $result = parent::listKxClusters($args->toArray());
        return new ListKxClustersResponse($result->toArray());
    }
}
