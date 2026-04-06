<?php

namespace Sunaoka\Aws\Structures\Sms\DeleteServerCatalog;

trait DeleteServerCatalogTrait
{
    /**
     * @param DeleteServerCatalogRequest $args
     * @return DeleteServerCatalogResponse
     */
    public function deleteServerCatalog(DeleteServerCatalogRequest $args)
    {
        $result = parent::deleteServerCatalog($args->toArray());
        return new DeleteServerCatalogResponse($result->toArray());
    }
}
