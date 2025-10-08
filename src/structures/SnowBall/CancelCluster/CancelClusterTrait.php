<?php

namespace Sunaoka\Aws\Structures\SnowBall\CancelCluster;

trait CancelClusterTrait
{
    /**
     * @param CancelClusterRequest $args
     * @return CancelClusterResponse
     */
    public function cancelCluster(CancelClusterRequest $args)
    {
        $result = parent::cancelCluster($args->toArray());
        return new CancelClusterResponse($result->toArray());
    }
}
