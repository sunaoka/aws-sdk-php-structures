<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\UpdatePreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'> $managementAccountRateTypeSelections
 * @property list<'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'> $memberAccountRateTypeSelections
 */
class UpdatePreferencesRequest extends Request
{
    /**
     * @param array{
     *     managementAccountRateTypeSelections?: list<'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'>,
     *     memberAccountRateTypeSelections?: list<'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
