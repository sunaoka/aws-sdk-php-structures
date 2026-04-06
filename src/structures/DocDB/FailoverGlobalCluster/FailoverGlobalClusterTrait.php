<?php

namespace Sunaoka\Aws\Structures\DocDB\FailoverGlobalCluster;

trait FailoverGlobalClusterTrait
{
    /**
     * @param FailoverGlobalClusterRequest $args
     * @return FailoverGlobalClusterResponse
     */
    public function failoverGlobalCluster(FailoverGlobalClusterRequest $args)
    {
        $result = parent::failoverGlobalCluster($args->toArray());
        return new FailoverGlobalClusterResponse($result->toArray());
    }
}
