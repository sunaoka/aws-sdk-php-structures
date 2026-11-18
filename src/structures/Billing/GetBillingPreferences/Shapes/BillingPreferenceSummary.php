<?php

namespace Sunaoka\Aws\Structures\Billing\GetBillingPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RI_SHARING'|'RI_SHARING_HISTORY'|'CREDIT_SHARING'|'CREDIT_SHARING_HISTORY'|'CREDIT_LEVEL_SHARING'|'BILLING_ALERTS'|'CREDIT_PREFERENCE_OPTIONS'|'BENEFIT_LEVEL_SHARING' $feature
 * @property string $key
 * @property 'ENABLED'|'DISABLED' $value
 * @property string|null $accountName
 * @property string|null $accountId
 * @property BillingPeriod|null $billingPeriod
 */
class BillingPreferenceSummary extends Shape
{
    /**
     * @param array{
     *     feature: 'RI_SHARING'|'RI_SHARING_HISTORY'|'CREDIT_SHARING'|'CREDIT_SHARING_HISTORY'|'CREDIT_LEVEL_SHARING'|'BILLING_ALERTS'|'CREDIT_PREFERENCE_OPTIONS'|'BENEFIT_LEVEL_SHARING',
     *     key: string,
     *     value: 'ENABLED'|'DISABLED',
     *     accountName?: string|null,
     *     accountId?: string|null,
     *     billingPeriod?: BillingPeriod|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
