<?php

namespace Sunaoka\Aws\Structures\Athena\CreateDataCatalog;

trait CreateDataCatalogTrait
{
    /**
     * @param CreateDataCatalogRequest $args
     * @return CreateDataCatalogResponse
     */
    public function createDataCatalog(CreateDataCatalogRequest $args)
    {
        $result = parent::createDataCatalog($args->toArray());
        return new CreateDataCatalogResponse($result->toArray());
    }
}
