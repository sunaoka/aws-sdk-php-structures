<?php

namespace Sunaoka\Aws\Structures\Glue\GetCatalog;

trait GetCatalogTrait
{
    /**
     * @param GetCatalogRequest $args
     * @return GetCatalogResponse
     */
    public function getCatalog(GetCatalogRequest $args)
    {
        $result = parent::getCatalog($args->toArray());
        return new GetCatalogResponse($result->toArray());
    }
}
