<?php

namespace Sunaoka\Aws\Structures\Omics\CreateAnnotationStore;

trait CreateAnnotationStoreTrait
{
    /**
     * @param CreateAnnotationStoreRequest $args
     * @return CreateAnnotationStoreResponse
     */
    public function createAnnotationStore(CreateAnnotationStoreRequest $args)
    {
        $result = parent::createAnnotationStore($args->toArray());
        return new CreateAnnotationStoreResponse($result->toArray());
    }
}
