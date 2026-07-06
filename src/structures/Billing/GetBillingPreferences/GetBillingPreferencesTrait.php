<?php

namespace Sunaoka\Aws\Structures\Billing\GetBillingPreferences;

trait GetBillingPreferencesTrait
{
    /**
     * @param GetBillingPreferencesRequest $args
     * @return GetBillingPreferencesResponse
     */
    public function getBillingPreferences(GetBillingPreferencesRequest $args)
    {
        $result = parent::getBillingPreferences($args->toArray());
        return new GetBillingPreferencesResponse($result->toArray());
    }
}
