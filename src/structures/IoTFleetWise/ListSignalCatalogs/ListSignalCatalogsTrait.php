<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListSignalCatalogs;

trait ListSignalCatalogsTrait
{
    /**
     * @param ListSignalCatalogsRequest $args
     * @return ListSignalCatalogsResponse
     */
    public function listSignalCatalogs(ListSignalCatalogsRequest $args)
    {
        $result = parent::listSignalCatalogs($args->toArray());
        return new ListSignalCatalogsResponse($result->toArray());
    }
}
