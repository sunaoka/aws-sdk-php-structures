<?php

namespace Sunaoka\Aws\Structures\Athena\UpdateDataCatalog;

trait UpdateDataCatalogTrait
{
    /**
     * @param UpdateDataCatalogRequest $args
     * @return UpdateDataCatalogResponse
     */
    public function updateDataCatalog(UpdateDataCatalogRequest $args)
    {
        $result = parent::updateDataCatalog($args->toArray());
        return new UpdateDataCatalogResponse($result->toArray());
    }
}
