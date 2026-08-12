<?php

namespace Sunaoka\Aws\Structures\Odb\UpdateExadbVmCluster;

trait UpdateExadbVmClusterTrait
{
    /**
     * @param UpdateExadbVmClusterRequest $args
     * @return UpdateExadbVmClusterResponse
     */
    public function updateExadbVmCluster(UpdateExadbVmClusterRequest $args)
    {
        $result = parent::updateExadbVmCluster($args->toArray());
        return new UpdateExadbVmClusterResponse($result->toArray());
    }
}
