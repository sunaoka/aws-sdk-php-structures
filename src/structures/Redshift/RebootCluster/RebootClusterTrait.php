<?php

namespace Sunaoka\Aws\Structures\Redshift\RebootCluster;

trait RebootClusterTrait
{
    /**
     * @param RebootClusterRequest $args
     * @return RebootClusterResponse
     */
    public function rebootCluster(RebootClusterRequest $args)
    {
        $result = parent::rebootCluster($args->toArray());
        return new RebootClusterResponse($result->toArray());
    }
}
