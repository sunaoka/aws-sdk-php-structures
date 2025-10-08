<?php

namespace Sunaoka\Aws\Structures\Connect\GetEffectiveHoursOfOperations;

trait GetEffectiveHoursOfOperationsTrait
{
    /**
     * @param GetEffectiveHoursOfOperationsRequest $args
     * @return GetEffectiveHoursOfOperationsResponse
     */
    public function getEffectiveHoursOfOperations(GetEffectiveHoursOfOperationsRequest $args)
    {
        $result = parent::getEffectiveHoursOfOperations($args->toArray());
        return new GetEffectiveHoursOfOperationsResponse($result->toArray());
    }
}
