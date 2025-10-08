<?php

namespace Sunaoka\Aws\Structures\Omics\CreateAnnotationStoreVersion;

trait CreateAnnotationStoreVersionTrait
{
    /**
     * @param CreateAnnotationStoreVersionRequest $args
     * @return CreateAnnotationStoreVersionResponse
     */
    public function createAnnotationStoreVersion(CreateAnnotationStoreVersionRequest $args)
    {
        $result = parent::createAnnotationStoreVersion($args->toArray());
        return new CreateAnnotationStoreVersionResponse($result->toArray());
    }
}
