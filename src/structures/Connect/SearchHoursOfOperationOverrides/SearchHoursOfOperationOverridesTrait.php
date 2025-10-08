<?php

namespace Sunaoka\Aws\Structures\Connect\SearchHoursOfOperationOverrides;

trait SearchHoursOfOperationOverridesTrait
{
    /**
     * @param SearchHoursOfOperationOverridesRequest $args
     * @return SearchHoursOfOperationOverridesResponse
     */
    public function searchHoursOfOperationOverrides(SearchHoursOfOperationOverridesRequest $args)
    {
        $result = parent::searchHoursOfOperationOverrides($args->toArray());
        return new SearchHoursOfOperationOverridesResponse($result->toArray());
    }
}
