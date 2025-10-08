<?php

namespace Sunaoka\Aws\Structures\Omics\UpdateVariantStore;

trait UpdateVariantStoreTrait
{
    /**
     * @param UpdateVariantStoreRequest $args
     * @return UpdateVariantStoreResponse
     */
    public function updateVariantStore(UpdateVariantStoreRequest $args)
    {
        $result = parent::updateVariantStore($args->toArray());
        return new UpdateVariantStoreResponse($result->toArray());
    }
}
