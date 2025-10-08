<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DecreaseReplicaCount;

trait DecreaseReplicaCountTrait
{
    /**
     * @param DecreaseReplicaCountRequest $args
     * @return DecreaseReplicaCountResponse
     */
    public function decreaseReplicaCount(DecreaseReplicaCountRequest $args)
    {
        $result = parent::decreaseReplicaCount($args->toArray());
        return new DecreaseReplicaCountResponse($result->toArray());
    }
}
