<?php

namespace Sunaoka\Aws\Structures\Rds\RebootDBCluster;

trait RebootDBClusterTrait
{
    /**
     * @param RebootDBClusterRequest $args
     * @return RebootDBClusterResponse
     */
    public function rebootDBCluster(RebootDBClusterRequest $args)
    {
        $result = parent::rebootDBCluster($args->toArray());
        return new RebootDBClusterResponse($result->toArray());
    }
}
