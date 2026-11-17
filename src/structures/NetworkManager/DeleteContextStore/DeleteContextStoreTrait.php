<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeleteContextStore;

trait DeleteContextStoreTrait
{
    /**
     * @param DeleteContextStoreRequest $args
     * @return DeleteContextStoreResponse
     */
    public function deleteContextStore(DeleteContextStoreRequest $args)
    {
        $result = parent::deleteContextStore($args->toArray());
        return new DeleteContextStoreResponse($result->toArray());
    }
}
