<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListResourcesInContextStore;

trait ListResourcesInContextStoreTrait
{
    /**
     * @param ListResourcesInContextStoreRequest $args
     * @return ListResourcesInContextStoreResponse
     */
    public function listResourcesInContextStore(ListResourcesInContextStoreRequest $args)
    {
        $result = parent::listResourcesInContextStore($args->toArray());
        return new ListResourcesInContextStoreResponse($result->toArray());
    }
}
