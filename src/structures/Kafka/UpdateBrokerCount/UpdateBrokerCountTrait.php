<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateBrokerCount;

trait UpdateBrokerCountTrait
{
    /**
     * @param UpdateBrokerCountRequest $args
     * @return UpdateBrokerCountResponse
     */
    public function updateBrokerCount(UpdateBrokerCountRequest $args)
    {
        $result = parent::updateBrokerCount($args->toArray());
        return new UpdateBrokerCountResponse($result->toArray());
    }
}
