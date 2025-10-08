<?php

namespace Sunaoka\Aws\Structures\CloudTrail\UpdateEventDataStore;

trait UpdateEventDataStoreTrait
{
    /**
     * @param UpdateEventDataStoreRequest $args
     * @return UpdateEventDataStoreResponse
     */
    public function updateEventDataStore(UpdateEventDataStoreRequest $args)
    {
        $result = parent::updateEventDataStore($args->toArray());
        return new UpdateEventDataStoreResponse($result->toArray());
    }
}
