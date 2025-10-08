<?php

namespace Sunaoka\Aws\Structures\CloudTrail\CreateEventDataStore;

trait CreateEventDataStoreTrait
{
    /**
     * @param CreateEventDataStoreRequest $args
     * @return CreateEventDataStoreResponse
     */
    public function createEventDataStore(CreateEventDataStoreRequest $args)
    {
        $result = parent::createEventDataStore($args->toArray());
        return new CreateEventDataStoreResponse($result->toArray());
    }
}
