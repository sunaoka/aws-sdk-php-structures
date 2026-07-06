<?php

namespace Sunaoka\Aws\Structures\Billing\GetBillingPreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 * @property list<'RI_SHARING'|'RI_SHARING_HISTORY'|'CREDIT_SHARING'|'CREDIT_SHARING_HISTORY'|'CREDIT_LEVEL_SHARING'|'BILLING_ALERTS'|'CREDIT_PREFERENCE_OPTIONS'> $features
 * @property list<Shapes\BillingFeatureFilter>|null $filters
 */
class GetBillingPreferencesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null,
     *     features: list<'RI_SHARING'|'RI_SHARING_HISTORY'|'CREDIT_SHARING'|'CREDIT_SHARING_HISTORY'|'CREDIT_LEVEL_SHARING'|'BILLING_ALERTS'|'CREDIT_PREFERENCE_OPTIONS'>,
     *     filters?: list<Shapes\BillingFeatureFilter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
