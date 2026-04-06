<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateRebalancing;

trait UpdateRebalancingTrait
{
    /**
     * @param UpdateRebalancingRequest $args
     * @return UpdateRebalancingResponse
     */
    public function updateRebalancing(UpdateRebalancingRequest $args)
    {
        $result = parent::updateRebalancing($args->toArray());
        return new UpdateRebalancingResponse($result->toArray());
    }
}
