<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateBrokerStorage;

trait UpdateBrokerStorageTrait
{
    /**
     * @param UpdateBrokerStorageRequest $args
     * @return UpdateBrokerStorageResponse
     */
    public function updateBrokerStorage(UpdateBrokerStorageRequest $args)
    {
        $result = parent::updateBrokerStorage($args->toArray());
        return new UpdateBrokerStorageResponse($result->toArray());
    }
}
