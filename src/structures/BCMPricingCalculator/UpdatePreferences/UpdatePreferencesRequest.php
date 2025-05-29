<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\UpdatePreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'|'AFTER_DISCOUNTS_AND_COMMITMENTS'>|null $managementAccountRateTypeSelections
 * @property list<'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'|'AFTER_DISCOUNTS_AND_COMMITMENTS'>|null $memberAccountRateTypeSelections
 * @property list<'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'|'AFTER_DISCOUNTS_AND_COMMITMENTS'>|null $standaloneAccountRateTypeSelections
 */
class UpdatePreferencesRequest extends Request
{
    /**
     * @param array{
     *     managementAccountRateTypeSelections?: list<'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'|'AFTER_DISCOUNTS_AND_COMMITMENTS'>|null,
     *     memberAccountRateTypeSelections?: list<'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'|'AFTER_DISCOUNTS_AND_COMMITMENTS'>|null,
     *     standaloneAccountRateTypeSelections?: list<'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'|'AFTER_DISCOUNTS_AND_COMMITMENTS'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
