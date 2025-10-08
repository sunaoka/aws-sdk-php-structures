<?php

namespace Sunaoka\Aws\Structures\Omics\ListAnnotationStores;

trait ListAnnotationStoresTrait
{
    /**
     * @param ListAnnotationStoresRequest $args
     * @return ListAnnotationStoresResponse
     */
    public function listAnnotationStores(ListAnnotationStoresRequest $args)
    {
        $result = parent::listAnnotationStores($args->toArray());
        return new ListAnnotationStoresResponse($result->toArray());
    }
}
