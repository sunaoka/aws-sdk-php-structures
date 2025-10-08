<?php

namespace Sunaoka\Aws\Structures\Omics\GetAnnotationStore;

trait GetAnnotationStoreTrait
{
    /**
     * @param GetAnnotationStoreRequest $args
     * @return GetAnnotationStoreResponse
     */
    public function getAnnotationStore(GetAnnotationStoreRequest $args)
    {
        $result = parent::getAnnotationStore($args->toArray());
        return new GetAnnotationStoreResponse($result->toArray());
    }
}
