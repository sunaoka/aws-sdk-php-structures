<?php

namespace Sunaoka\Aws\Structures\Odb\DeleteExadbVmCluster;

trait DeleteExadbVmClusterTrait
{
    /**
     * @param DeleteExadbVmClusterRequest $args
     * @return DeleteExadbVmClusterResponse
     */
    public function deleteExadbVmCluster(DeleteExadbVmClusterRequest $args)
    {
        $result = parent::deleteExadbVmCluster($args->toArray());
        return new DeleteExadbVmClusterResponse($result->toArray());
    }
}
