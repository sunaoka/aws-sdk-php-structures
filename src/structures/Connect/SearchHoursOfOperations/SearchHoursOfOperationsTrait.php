<?php

namespace Sunaoka\Aws\Structures\Connect\SearchHoursOfOperations;

trait SearchHoursOfOperationsTrait
{
    /**
     * @param SearchHoursOfOperationsRequest $args
     * @return SearchHoursOfOperationsResponse
     */
    public function searchHoursOfOperations(SearchHoursOfOperationsRequest $args)
    {
        $result = parent::searchHoursOfOperations($args->toArray());
        return new SearchHoursOfOperationsResponse($result->toArray());
    }
}
