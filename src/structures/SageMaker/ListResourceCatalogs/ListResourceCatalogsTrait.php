<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListResourceCatalogs;

trait ListResourceCatalogsTrait
{
    /**
     * @param ListResourceCatalogsRequest $args
     * @return ListResourceCatalogsResponse
     */
    public function listResourceCatalogs(ListResourceCatalogsRequest $args)
    {
        $result = parent::listResourceCatalogs($args->toArray());
        return new ListResourceCatalogsResponse($result->toArray());
    }
}
