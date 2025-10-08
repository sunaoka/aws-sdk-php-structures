<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteSequenceStore;

trait DeleteSequenceStoreTrait
{
    /**
     * @param DeleteSequenceStoreRequest $args
     * @return DeleteSequenceStoreResponse
     */
    public function deleteSequenceStore(DeleteSequenceStoreRequest $args)
    {
        $result = parent::deleteSequenceStore($args->toArray());
        return new DeleteSequenceStoreResponse($result->toArray());
    }
}
