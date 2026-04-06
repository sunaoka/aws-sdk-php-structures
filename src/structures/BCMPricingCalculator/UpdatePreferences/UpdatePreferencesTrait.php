<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\UpdatePreferences;

trait UpdatePreferencesTrait
{
    /**
     * @param UpdatePreferencesRequest $args
     * @return UpdatePreferencesResponse
     */
    public function updatePreferences(UpdatePreferencesRequest $args)
    {
        $result = parent::updatePreferences($args->toArray());
        return new UpdatePreferencesResponse($result->toArray());
    }
}
