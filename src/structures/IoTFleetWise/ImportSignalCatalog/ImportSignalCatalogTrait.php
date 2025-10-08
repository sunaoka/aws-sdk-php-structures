<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ImportSignalCatalog;

trait ImportSignalCatalogTrait
{
    /**
     * @param ImportSignalCatalogRequest $args
     * @return ImportSignalCatalogResponse
     */
    public function importSignalCatalog(ImportSignalCatalogRequest $args)
    {
        $result = parent::importSignalCatalog($args->toArray());
        return new ImportSignalCatalogResponse($result->toArray());
    }
}
