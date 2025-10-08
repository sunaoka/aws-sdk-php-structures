<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteAnnotationStoreVersions;

trait DeleteAnnotationStoreVersionsTrait
{
    /**
     * @param DeleteAnnotationStoreVersionsRequest $args
     * @return DeleteAnnotationStoreVersionsResponse
     */
    public function deleteAnnotationStoreVersions(DeleteAnnotationStoreVersionsRequest $args)
    {
        $result = parent::deleteAnnotationStoreVersions($args->toArray());
        return new DeleteAnnotationStoreVersionsResponse($result->toArray());
    }
}
