<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\CreateDbCluster;

trait CreateDbClusterTrait
{
    /**
     * @param CreateDbClusterRequest $args
     * @return CreateDbClusterResponse
     */
    public function createDbCluster(CreateDbClusterRequest $args)
    {
        $result = parent::createDbCluster($args->toArray());
        return new CreateDbClusterResponse($result->toArray());
    }
}
