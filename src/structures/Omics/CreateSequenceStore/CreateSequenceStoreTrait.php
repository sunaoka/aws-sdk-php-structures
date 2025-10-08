<?php

namespace Sunaoka\Aws\Structures\Omics\CreateSequenceStore;

trait CreateSequenceStoreTrait
{
    /**
     * @param CreateSequenceStoreRequest $args
     * @return CreateSequenceStoreResponse
     */
    public function createSequenceStore(CreateSequenceStoreRequest $args)
    {
        $result = parent::createSequenceStore($args->toArray());
        return new CreateSequenceStoreResponse($result->toArray());
    }
}
