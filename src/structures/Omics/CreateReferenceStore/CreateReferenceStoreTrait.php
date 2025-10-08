<?php

namespace Sunaoka\Aws\Structures\Omics\CreateReferenceStore;

trait CreateReferenceStoreTrait
{
    /**
     * @param CreateReferenceStoreRequest $args
     * @return CreateReferenceStoreResponse
     */
    public function createReferenceStore(CreateReferenceStoreRequest $args)
    {
        $result = parent::createReferenceStore($args->toArray());
        return new CreateReferenceStoreResponse($result->toArray());
    }
}
