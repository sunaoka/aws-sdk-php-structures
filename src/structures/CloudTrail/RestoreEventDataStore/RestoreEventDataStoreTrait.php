<?php

namespace Sunaoka\Aws\Structures\CloudTrail\RestoreEventDataStore;

trait RestoreEventDataStoreTrait
{
    /**
     * @param RestoreEventDataStoreRequest $args
     * @return RestoreEventDataStoreResponse
     */
    public function restoreEventDataStore(RestoreEventDataStoreRequest $args)
    {
        $result = parent::restoreEventDataStore($args->toArray());
        return new RestoreEventDataStoreResponse($result->toArray());
    }
}
