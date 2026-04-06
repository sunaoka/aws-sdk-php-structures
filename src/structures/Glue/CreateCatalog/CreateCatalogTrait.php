<?php

namespace Sunaoka\Aws\Structures\Glue\CreateCatalog;

trait CreateCatalogTrait
{
    /**
     * @param CreateCatalogRequest $args
     * @return CreateCatalogResponse
     */
    public function createCatalog(CreateCatalogRequest $args)
    {
        $result = parent::createCatalog($args->toArray());
        return new CreateCatalogResponse($result->toArray());
    }
}
