<?php

namespace Sunaoka\Aws\Structures\DocDB\CreateDBCluster;

trait CreateDBClusterTrait
{
    /**
     * @param CreateDBClusterRequest $args
     * @return CreateDBClusterResponse
     */
    public function createDBCluster(CreateDBClusterRequest $args)
    {
        $result = parent::createDBCluster($args->toArray());
        return new CreateDBClusterResponse($result->toArray());
    }
}
