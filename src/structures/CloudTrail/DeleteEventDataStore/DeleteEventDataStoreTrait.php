<?php

namespace Sunaoka\Aws\Structures\CloudTrail\DeleteEventDataStore;

trait DeleteEventDataStoreTrait
{
    /**
     * @param DeleteEventDataStoreRequest $args
     * @return DeleteEventDataStoreResponse
     */
    public function deleteEventDataStore(DeleteEventDataStoreRequest $args)
    {
        $result = parent::deleteEventDataStore($args->toArray());
        return new DeleteEventDataStoreResponse($result->toArray());
    }
}
