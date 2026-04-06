<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListRecommenderFilters;

trait ListRecommenderFiltersTrait
{
    /**
     * @param ListRecommenderFiltersRequest $args
     * @return ListRecommenderFiltersResponse
     */
    public function listRecommenderFilters(ListRecommenderFiltersRequest $args)
    {
        $result = parent::listRecommenderFilters($args->toArray());
        return new ListRecommenderFiltersResponse($result->toArray());
    }
}
