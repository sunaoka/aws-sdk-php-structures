<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTableReplicaAutoScaling;

trait UpdateTableReplicaAutoScalingTrait
{
    /**
     * @param UpdateTableReplicaAutoScalingRequest $args
     * @return UpdateTableReplicaAutoScalingResponse
     */
    public function updateTableReplicaAutoScaling(UpdateTableReplicaAutoScalingRequest $args)
    {
        $result = parent::updateTableReplicaAutoScaling($args->toArray());
        return new UpdateTableReplicaAutoScalingResponse($result->toArray());
    }
}
