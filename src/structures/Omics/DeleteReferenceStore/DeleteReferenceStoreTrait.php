<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteReferenceStore;

trait DeleteReferenceStoreTrait
{
    /**
     * @param DeleteReferenceStoreRequest $args
     * @return DeleteReferenceStoreResponse
     */
    public function deleteReferenceStore(DeleteReferenceStoreRequest $args)
    {
        $result = parent::deleteReferenceStore($args->toArray());
        return new DeleteReferenceStoreResponse($result->toArray());
    }
}
