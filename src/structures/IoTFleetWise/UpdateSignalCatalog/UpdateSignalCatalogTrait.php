<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateSignalCatalog;

trait UpdateSignalCatalogTrait
{
    /**
     * @param UpdateSignalCatalogRequest $args
     * @return UpdateSignalCatalogResponse
     */
    public function updateSignalCatalog(UpdateSignalCatalogRequest $args)
    {
        $result = parent::updateSignalCatalog($args->toArray());
        return new UpdateSignalCatalogResponse($result->toArray());
    }
}
