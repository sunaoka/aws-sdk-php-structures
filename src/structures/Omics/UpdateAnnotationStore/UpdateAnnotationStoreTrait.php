<?php

namespace Sunaoka\Aws\Structures\Omics\UpdateAnnotationStore;

trait UpdateAnnotationStoreTrait
{
    /**
     * @param UpdateAnnotationStoreRequest $args
     * @return UpdateAnnotationStoreResponse
     */
    public function updateAnnotationStore(UpdateAnnotationStoreRequest $args)
    {
        $result = parent::updateAnnotationStore($args->toArray());
        return new UpdateAnnotationStoreResponse($result->toArray());
    }
}
