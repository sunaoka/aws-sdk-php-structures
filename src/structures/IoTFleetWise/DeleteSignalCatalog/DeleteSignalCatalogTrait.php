<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\DeleteSignalCatalog;

trait DeleteSignalCatalogTrait
{
    /**
     * @param DeleteSignalCatalogRequest $args
     * @return DeleteSignalCatalogResponse
     */
    public function deleteSignalCatalog(DeleteSignalCatalogRequest $args)
    {
        $result = parent::deleteSignalCatalog($args->toArray());
        return new DeleteSignalCatalogResponse($result->toArray());
    }
}
