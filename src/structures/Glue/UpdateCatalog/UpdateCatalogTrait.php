<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateCatalog;

trait UpdateCatalogTrait
{
    /**
     * @param UpdateCatalogRequest $args
     * @return UpdateCatalogResponse
     */
    public function updateCatalog(UpdateCatalogRequest $args)
    {
        $result = parent::updateCatalog($args->toArray());
        return new UpdateCatalogResponse($result->toArray());
    }
}
