<?php

namespace Sunaoka\Aws\Structures\DocDB\FailoverDBCluster;

trait FailoverDBClusterTrait
{
    /**
     * @param FailoverDBClusterRequest $args
     * @return FailoverDBClusterResponse
     */
    public function failoverDBCluster(FailoverDBClusterRequest $args)
    {
        $result = parent::failoverDBCluster($args->toArray());
        return new FailoverDBClusterResponse($result->toArray());
    }
}
