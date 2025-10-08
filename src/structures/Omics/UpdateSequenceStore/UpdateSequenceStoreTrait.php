<?php

namespace Sunaoka\Aws\Structures\Omics\UpdateSequenceStore;

trait UpdateSequenceStoreTrait
{
    /**
     * @param UpdateSequenceStoreRequest $args
     * @return UpdateSequenceStoreResponse
     */
    public function updateSequenceStore(UpdateSequenceStoreRequest $args)
    {
        $result = parent::updateSequenceStore($args->toArray());
        return new UpdateSequenceStoreResponse($result->toArray());
    }
}
