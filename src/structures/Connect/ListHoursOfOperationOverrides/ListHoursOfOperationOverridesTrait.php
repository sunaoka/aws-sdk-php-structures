<?php

namespace Sunaoka\Aws\Structures\Connect\ListHoursOfOperationOverrides;

trait ListHoursOfOperationOverridesTrait
{
    /**
     * @param ListHoursOfOperationOverridesRequest $args
     * @return ListHoursOfOperationOverridesResponse
     */
    public function listHoursOfOperationOverrides(ListHoursOfOperationOverridesRequest $args)
    {
        $result = parent::listHoursOfOperationOverrides($args->toArray());
        return new ListHoursOfOperationOverridesResponse($result->toArray());
    }
}
