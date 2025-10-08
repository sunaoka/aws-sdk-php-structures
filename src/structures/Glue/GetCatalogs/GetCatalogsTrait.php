<?php

namespace Sunaoka\Aws\Structures\Glue\GetCatalogs;

trait GetCatalogsTrait
{
    /**
     * @param GetCatalogsRequest $args
     * @return GetCatalogsResponse
     */
    public function getCatalogs(GetCatalogsRequest $args)
    {
        $result = parent::getCatalogs($args->toArray());
        return new GetCatalogsResponse($result->toArray());
    }
}
