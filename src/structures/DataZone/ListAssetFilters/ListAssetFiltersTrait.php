<?php

namespace Sunaoka\Aws\Structures\DataZone\ListAssetFilters;

trait ListAssetFiltersTrait
{
    /**
     * @param ListAssetFiltersRequest $args
     * @return ListAssetFiltersResponse
     */
    public function listAssetFilters(ListAssetFiltersRequest $args)
    {
        $result = parent::listAssetFilters($args->toArray());
        return new ListAssetFiltersResponse($result->toArray());
    }
}
