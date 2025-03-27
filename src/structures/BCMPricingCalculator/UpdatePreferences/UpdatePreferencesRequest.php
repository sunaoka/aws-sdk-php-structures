<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\UpdatePreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'>|null $managementAccountRateTypeSelections
 * @property list<'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'>|null $memberAccountRateTypeSelections
 * @property list<'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'>|null $standaloneAccountRateTypeSelections
 */
class UpdatePreferencesRequest extends Request
{
    /**
     * @param array{
     *     managementAccountRateTypeSelections?: list<'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'>|null,
     *     memberAccountRateTypeSelections?: list<'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'>|null,
     *     standaloneAccountRateTypeSelections?: list<'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
