<?php

namespace Sunaoka\Aws\Structures\Connect\CreateHoursOfOperationOverride;

trait CreateHoursOfOperationOverrideTrait
{
    /**
     * @param CreateHoursOfOperationOverrideRequest $args
     * @return CreateHoursOfOperationOverrideResponse
     */
    public function createHoursOfOperationOverride(CreateHoursOfOperationOverrideRequest $args)
    {
        $result = parent::createHoursOfOperationOverride($args->toArray());
        return new CreateHoursOfOperationOverrideResponse($result->toArray());
    }
}
