<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteVariantStore;

trait DeleteVariantStoreTrait
{
    /**
     * @param DeleteVariantStoreRequest $args
     * @return DeleteVariantStoreResponse
     */
    public function deleteVariantStore(DeleteVariantStoreRequest $args)
    {
        $result = parent::deleteVariantStore($args->toArray());
        return new DeleteVariantStoreResponse($result->toArray());
    }
}
