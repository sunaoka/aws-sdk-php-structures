<?php

namespace Sunaoka\Aws\Structures\Omics\GetAnnotationStoreVersion;

trait GetAnnotationStoreVersionTrait
{
    /**
     * @param GetAnnotationStoreVersionRequest $args
     * @return GetAnnotationStoreVersionResponse
     */
    public function getAnnotationStoreVersion(GetAnnotationStoreVersionRequest $args)
    {
        $result = parent::getAnnotationStoreVersion($args->toArray());
        return new GetAnnotationStoreVersionResponse($result->toArray());
    }
}
