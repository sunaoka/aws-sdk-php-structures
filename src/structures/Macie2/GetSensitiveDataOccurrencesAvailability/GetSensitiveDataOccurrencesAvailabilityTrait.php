<?php

namespace Sunaoka\Aws\Structures\Macie2\GetSensitiveDataOccurrencesAvailability;

trait GetSensitiveDataOccurrencesAvailabilityTrait
{
    /**
     * @param GetSensitiveDataOccurrencesAvailabilityRequest $args
     * @return GetSensitiveDataOccurrencesAvailabilityResponse
     */
    public function getSensitiveDataOccurrencesAvailability(GetSensitiveDataOccurrencesAvailabilityRequest $args)
    {
        $result = parent::getSensitiveDataOccurrencesAvailability($args->toArray());
        return new GetSensitiveDataOccurrencesAvailabilityResponse($result->toArray());
    }
}
