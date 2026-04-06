<?php

namespace Sunaoka\Aws\Structures\Sms\ImportServerCatalog;

trait ImportServerCatalogTrait
{
    /**
     * @param ImportServerCatalogRequest $args
     * @return ImportServerCatalogResponse
     */
    public function importServerCatalog(ImportServerCatalogRequest $args)
    {
        $result = parent::importServerCatalog($args->toArray());
        return new ImportServerCatalogResponse($result->toArray());
    }
}
