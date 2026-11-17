<?php

namespace Sunaoka\Aws\Structures\NetworkManager\AssociateContextStore;

trait AssociateContextStoreTrait
{
    /**
     * @param AssociateContextStoreRequest $args
     * @return AssociateContextStoreResponse
     */
    public function associateContextStore(AssociateContextStoreRequest $args)
    {
        $result = parent::associateContextStore($args->toArray());
        return new AssociateContextStoreResponse($result->toArray());
    }
}
