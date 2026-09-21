<?php

namespace Sunaoka\Aws\Structures\BillingConductor\GetBillingTransferPreference;

trait GetBillingTransferPreferenceTrait
{
    /**
     * @param GetBillingTransferPreferenceRequest $args
     * @return GetBillingTransferPreferenceResponse
     */
    public function getBillingTransferPreference(GetBillingTransferPreferenceRequest $args)
    {
        $result = parent::getBillingTransferPreference($args->toArray());
        return new GetBillingTransferPreferenceResponse($result->toArray());
    }
}
