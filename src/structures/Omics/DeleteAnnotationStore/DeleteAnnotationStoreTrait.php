<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteAnnotationStore;

trait DeleteAnnotationStoreTrait
{
    /**
     * @param DeleteAnnotationStoreRequest $args
     * @return DeleteAnnotationStoreResponse
     */
    public function deleteAnnotationStore(DeleteAnnotationStoreRequest $args)
    {
        $result = parent::deleteAnnotationStore($args->toArray());
        return new DeleteAnnotationStoreResponse($result->toArray());
    }
}
