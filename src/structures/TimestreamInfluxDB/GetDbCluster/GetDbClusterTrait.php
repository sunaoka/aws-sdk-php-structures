<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\GetDbCluster;

trait GetDbClusterTrait
{
    /**
     * @param GetDbClusterRequest $args
     * @return GetDbClusterResponse
     */
    public function getDbCluster(GetDbClusterRequest $args)
    {
        $result = parent::getDbCluster($args->toArray());
        return new GetDbClusterResponse($result->toArray());
    }
}
