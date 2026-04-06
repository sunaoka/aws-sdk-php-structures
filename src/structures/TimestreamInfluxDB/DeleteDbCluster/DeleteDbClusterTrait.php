<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\DeleteDbCluster;

trait DeleteDbClusterTrait
{
    /**
     * @param DeleteDbClusterRequest $args
     * @return DeleteDbClusterResponse
     */
    public function deleteDbCluster(DeleteDbClusterRequest $args)
    {
        $result = parent::deleteDbCluster($args->toArray());
        return new DeleteDbClusterResponse($result->toArray());
    }
}
