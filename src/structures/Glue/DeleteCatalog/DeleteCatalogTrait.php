<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteCatalog;

trait DeleteCatalogTrait
{
    /**
     * @param DeleteCatalogRequest $args
     * @return DeleteCatalogResponse
     */
    public function deleteCatalog(DeleteCatalogRequest $args)
    {
        $result = parent::deleteCatalog($args->toArray());
        return new DeleteCatalogResponse($result->toArray());
    }
}
