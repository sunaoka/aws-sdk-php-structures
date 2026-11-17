<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateContextStore;

trait UpdateContextStoreTrait
{
    /**
     * @param UpdateContextStoreRequest $args
     * @return UpdateContextStoreResponse
     */
    public function updateContextStore(UpdateContextStoreRequest $args)
    {
        $result = parent::updateContextStore($args->toArray());
        return new UpdateContextStoreResponse($result->toArray());
    }
}
