<?php

namespace Sunaoka\Aws\Structures\Macie2\ListFindingsFilters;

trait ListFindingsFiltersTrait
{
    /**
     * @param ListFindingsFiltersRequest $args
     * @return ListFindingsFiltersResponse
     */
    public function listFindingsFilters(ListFindingsFiltersRequest $args)
    {
        $result = parent::listFindingsFilters($args->toArray());
        return new ListFindingsFiltersResponse($result->toArray());
    }
}
