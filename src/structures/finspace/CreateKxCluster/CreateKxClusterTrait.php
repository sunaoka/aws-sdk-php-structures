<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxCluster;

trait CreateKxClusterTrait
{
    /**
     * @param CreateKxClusterRequest $args
     * @return CreateKxClusterResponse
     */
    public function createKxCluster(CreateKxClusterRequest $args)
    {
        $result = parent::createKxCluster($args->toArray());
        return new CreateKxClusterResponse($result->toArray());
    }
}
