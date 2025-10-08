<?php

namespace Sunaoka\Aws\Structures\Omics\ListAnnotationStoreVersions;

trait ListAnnotationStoreVersionsTrait
{
    /**
     * @param ListAnnotationStoreVersionsRequest $args
     * @return ListAnnotationStoreVersionsResponse
     */
    public function listAnnotationStoreVersions(ListAnnotationStoreVersionsRequest $args)
    {
        $result = parent::listAnnotationStoreVersions($args->toArray());
        return new ListAnnotationStoreVersionsResponse($result->toArray());
    }
}
