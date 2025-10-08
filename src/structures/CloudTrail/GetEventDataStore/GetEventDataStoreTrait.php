<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetEventDataStore;

trait GetEventDataStoreTrait
{
    /**
     * @param GetEventDataStoreRequest $args
     * @return GetEventDataStoreResponse
     */
    public function getEventDataStore(GetEventDataStoreRequest $args)
    {
        $result = parent::getEventDataStore($args->toArray());
        return new GetEventDataStoreResponse($result->toArray());
    }
}
