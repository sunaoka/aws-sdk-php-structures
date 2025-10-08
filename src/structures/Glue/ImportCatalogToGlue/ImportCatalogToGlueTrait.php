<?php

namespace Sunaoka\Aws\Structures\Glue\ImportCatalogToGlue;

trait ImportCatalogToGlueTrait
{
    /**
     * @param ImportCatalogToGlueRequest $args
     * @return ImportCatalogToGlueResponse
     */
    public function importCatalogToGlue(ImportCatalogToGlueRequest $args)
    {
        $result = parent::importCatalogToGlue($args->toArray());
        return new ImportCatalogToGlueResponse($result->toArray());
    }
}
