<?php

namespace Sunaoka\Aws\Structures\ElastiCache\IncreaseReplicaCount;

trait IncreaseReplicaCountTrait
{
    /**
     * @param IncreaseReplicaCountRequest $args
     * @return IncreaseReplicaCountResponse
     */
    public function increaseReplicaCount(IncreaseReplicaCountRequest $args)
    {
        $result = parent::increaseReplicaCount($args->toArray());
        return new IncreaseReplicaCountResponse($result->toArray());
    }
}
