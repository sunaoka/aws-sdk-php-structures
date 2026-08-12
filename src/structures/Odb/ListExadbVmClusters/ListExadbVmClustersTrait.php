<?php

namespace Sunaoka\Aws\Structures\Odb\ListExadbVmClusters;

trait ListExadbVmClustersTrait
{
    /**
     * @param ListExadbVmClustersRequest $args
     * @return ListExadbVmClustersResponse
     */
    public function listExadbVmClusters(ListExadbVmClustersRequest $args)
    {
        $result = parent::listExadbVmClusters($args->toArray());
        return new ListExadbVmClustersResponse($result->toArray());
    }
}
