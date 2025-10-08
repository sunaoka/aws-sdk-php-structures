<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetSignalCatalog;

trait GetSignalCatalogTrait
{
    /**
     * @param GetSignalCatalogRequest $args
     * @return GetSignalCatalogResponse
     */
    public function getSignalCatalog(GetSignalCatalogRequest $args)
    {
        $result = parent::getSignalCatalog($args->toArray());
        return new GetSignalCatalogResponse($result->toArray());
    }
}
