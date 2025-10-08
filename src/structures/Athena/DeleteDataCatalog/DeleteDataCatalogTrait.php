<?php

namespace Sunaoka\Aws\Structures\Athena\DeleteDataCatalog;

trait DeleteDataCatalogTrait
{
    /**
     * @param DeleteDataCatalogRequest $args
     * @return DeleteDataCatalogResponse
     */
    public function deleteDataCatalog(DeleteDataCatalogRequest $args)
    {
        $result = parent::deleteDataCatalog($args->toArray());
        return new DeleteDataCatalogResponse($result->toArray());
    }
}
