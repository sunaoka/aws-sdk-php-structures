<?php

namespace Sunaoka\Aws\Structures\Omics\CreateVariantStore;

trait CreateVariantStoreTrait
{
    /**
     * @param CreateVariantStoreRequest $args
     * @return CreateVariantStoreResponse
     */
    public function createVariantStore(CreateVariantStoreRequest $args)
    {
        $result = parent::createVariantStore($args->toArray());
        return new CreateVariantStoreResponse($result->toArray());
    }
}
