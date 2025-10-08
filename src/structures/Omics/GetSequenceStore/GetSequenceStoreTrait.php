<?php

namespace Sunaoka\Aws\Structures\Omics\GetSequenceStore;

trait GetSequenceStoreTrait
{
    /**
     * @param GetSequenceStoreRequest $args
     * @return GetSequenceStoreResponse
     */
    public function getSequenceStore(GetSequenceStoreRequest $args)
    {
        $result = parent::getSequenceStore($args->toArray());
        return new GetSequenceStoreResponse($result->toArray());
    }
}
