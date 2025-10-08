<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateSignalCatalog;

trait CreateSignalCatalogTrait
{
    /**
     * @param CreateSignalCatalogRequest $args
     * @return CreateSignalCatalogResponse
     */
    public function createSignalCatalog(CreateSignalCatalogRequest $args)
    {
        $result = parent::createSignalCatalog($args->toArray());
        return new CreateSignalCatalogResponse($result->toArray());
    }
}
