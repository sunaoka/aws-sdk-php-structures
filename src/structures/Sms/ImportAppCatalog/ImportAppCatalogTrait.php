<?php

namespace Sunaoka\Aws\Structures\Sms\ImportAppCatalog;

trait ImportAppCatalogTrait
{
    /**
     * @param ImportAppCatalogRequest $args
     * @return ImportAppCatalogResponse
     */
    public function importAppCatalog(ImportAppCatalogRequest $args)
    {
        $result = parent::importAppCatalog($args->toArray());
        return new ImportAppCatalogResponse($result->toArray());
    }
}
