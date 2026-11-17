<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetContextStore;

trait GetContextStoreTrait
{
    /**
     * @param GetContextStoreRequest $args
     * @return GetContextStoreResponse
     */
    public function getContextStore(GetContextStoreRequest $args)
    {
        $result = parent::getContextStore($args->toArray());
        return new GetContextStoreResponse($result->toArray());
    }
}
