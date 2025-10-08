<?php

namespace Sunaoka\Aws\Structures\Omics\UpdateAnnotationStoreVersion;

trait UpdateAnnotationStoreVersionTrait
{
    /**
     * @param UpdateAnnotationStoreVersionRequest $args
     * @return UpdateAnnotationStoreVersionResponse
     */
    public function updateAnnotationStoreVersion(UpdateAnnotationStoreVersionRequest $args)
    {
        $result = parent::updateAnnotationStoreVersion($args->toArray());
        return new UpdateAnnotationStoreVersionResponse($result->toArray());
    }
}
