<?php

namespace Sunaoka\Aws\Structures\Glue\GetCatalogImportStatus;

trait GetCatalogImportStatusTrait
{
    /**
     * @param GetCatalogImportStatusRequest $args
     * @return GetCatalogImportStatusResponse
     */
    public function getCatalogImportStatus(GetCatalogImportStatusRequest $args)
    {
        $result = parent::getCatalogImportStatus($args->toArray());
        return new GetCatalogImportStatusResponse($result->toArray());
    }
}
