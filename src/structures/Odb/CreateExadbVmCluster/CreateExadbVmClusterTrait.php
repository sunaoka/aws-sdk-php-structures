<?php

namespace Sunaoka\Aws\Structures\Odb\CreateExadbVmCluster;

trait CreateExadbVmClusterTrait
{
    /**
     * @param CreateExadbVmClusterRequest $args
     * @return CreateExadbVmClusterResponse
     */
    public function createExadbVmCluster(CreateExadbVmClusterRequest $args)
    {
        $result = parent::createExadbVmCluster($args->toArray());
        return new CreateExadbVmClusterResponse($result->toArray());
    }
}
