<?php

namespace Sunaoka\Aws\Structures\Odb\GetExadbVmCluster;

trait GetExadbVmClusterTrait
{
    /**
     * @param GetExadbVmClusterRequest $args
     * @return GetExadbVmClusterResponse
     */
    public function getExadbVmCluster(GetExadbVmClusterRequest $args)
    {
        $result = parent::getExadbVmCluster($args->toArray());
        return new GetExadbVmClusterResponse($result->toArray());
    }
}
