<?php

namespace Sunaoka\Aws\Structures\Billing\UpdateBillingPreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RI_SHARING'|'RI_SHARING_HISTORY'|'CREDIT_SHARING'|'CREDIT_SHARING_HISTORY'|'CREDIT_LEVEL_SHARING'|'BILLING_ALERTS'|'CREDIT_PREFERENCE_OPTIONS' $feature
 * @property list<Shapes\BillingPreferenceForKey> $billingPreferencesPerKey
 */
class UpdateBillingPreferencesRequest extends Request
{
    /**
     * @param array{
     *     feature: 'RI_SHARING'|'RI_SHARING_HISTORY'|'CREDIT_SHARING'|'CREDIT_SHARING_HISTORY'|'CREDIT_LEVEL_SHARING'|'BILLING_ALERTS'|'CREDIT_PREFERENCE_OPTIONS',
     *     billingPreferencesPerKey: list<Shapes\BillingPreferenceForKey>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
