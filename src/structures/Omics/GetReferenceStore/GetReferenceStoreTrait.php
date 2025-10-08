<?php

namespace Sunaoka\Aws\Structures\Omics\GetReferenceStore;

trait GetReferenceStoreTrait
{
    /**
     * @param GetReferenceStoreRequest $args
     * @return GetReferenceStoreResponse
     */
    public function getReferenceStore(GetReferenceStoreRequest $args)
    {
        $result = parent::getReferenceStore($args->toArray());
        return new GetReferenceStoreResponse($result->toArray());
    }
}
