<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListFilters;

trait ListFiltersTrait
{
    /**
     * @param ListFiltersRequest $args
     * @return ListFiltersResponse
     */
    public function listFilters(ListFiltersRequest $args)
    {
        $result = parent::listFilters($args->toArray());
        return new ListFiltersResponse($result->toArray());
    }
}
