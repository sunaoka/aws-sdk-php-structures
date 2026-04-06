<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\RebootDbCluster;

trait RebootDbClusterTrait
{
    /**
     * @param RebootDbClusterRequest $args
     * @return RebootDbClusterResponse
     */
    public function rebootDbCluster(RebootDbClusterRequest $args)
    {
        $result = parent::rebootDbCluster($args->toArray());
        return new RebootDbClusterResponse($result->toArray());
    }
}
