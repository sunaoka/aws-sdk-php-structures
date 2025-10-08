<?php

namespace Sunaoka\Aws\Structures\Omics\GetVariantStore;

trait GetVariantStoreTrait
{
    /**
     * @param GetVariantStoreRequest $args
     * @return GetVariantStoreResponse
     */
    public function getVariantStore(GetVariantStoreRequest $args)
    {
        $result = parent::getVariantStore($args->toArray());
        return new GetVariantStoreResponse($result->toArray());
    }
}
