<?php

namespace Sunaoka\Aws\Structures\Billing\UpdateBillingPreferences;

trait UpdateBillingPreferencesTrait
{
    /**
     * @param UpdateBillingPreferencesRequest $args
     * @return UpdateBillingPreferencesResponse
     */
    public function updateBillingPreferences(UpdateBillingPreferencesRequest $args)
    {
        $result = parent::updateBillingPreferences($args->toArray());
        return new UpdateBillingPreferencesResponse($result->toArray());
    }
}
