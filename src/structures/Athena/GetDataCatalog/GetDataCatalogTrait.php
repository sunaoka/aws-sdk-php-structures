<?php

namespace Sunaoka\Aws\Structures\Athena\GetDataCatalog;

trait GetDataCatalogTrait
{
    /**
     * @param GetDataCatalogRequest $args
     * @return GetDataCatalogResponse
     */
    public function getDataCatalog(GetDataCatalogRequest $args)
    {
        $result = parent::getDataCatalog($args->toArray());
        return new GetDataCatalogResponse($result->toArray());
    }
}
