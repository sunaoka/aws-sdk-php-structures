<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdateBillingTransferPreference;

trait UpdateBillingTransferPreferenceTrait
{
    /**
     * @param UpdateBillingTransferPreferenceRequest $args
     * @return UpdateBillingTransferPreferenceResponse
     */
    public function updateBillingTransferPreference(UpdateBillingTransferPreferenceRequest $args)
    {
        $result = parent::updateBillingTransferPreference($args->toArray());
        return new UpdateBillingTransferPreferenceResponse($result->toArray());
    }
}
