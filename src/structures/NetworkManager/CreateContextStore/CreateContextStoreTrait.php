<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateContextStore;

trait CreateContextStoreTrait
{
    /**
     * @param CreateContextStoreRequest $args
     * @return CreateContextStoreResponse
     */
    public function createContextStore(CreateContextStoreRequest $args)
    {
        $result = parent::createContextStore($args->toArray());
        return new CreateContextStoreResponse($result->toArray());
    }
}
