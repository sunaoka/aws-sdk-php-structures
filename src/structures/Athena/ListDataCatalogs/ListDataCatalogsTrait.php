<?php

namespace Sunaoka\Aws\Structures\Athena\ListDataCatalogs;

trait ListDataCatalogsTrait
{
    /**
     * @param ListDataCatalogsRequest $args
     * @return ListDataCatalogsResponse
     */
    public function listDataCatalogs(ListDataCatalogsRequest $args)
    {
        $result = parent::listDataCatalogs($args->toArray());
        return new ListDataCatalogsResponse($result->toArray());
    }
}
