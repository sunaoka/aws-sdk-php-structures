<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\UpdatePreferences;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'>|null $managementAccountRateTypeSelections
 * @property list<'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'>|null $memberAccountRateTypeSelections
 * @property list<'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'>|null $standaloneAccountRateTypeSelections
 */
class UpdatePreferencesResponse extends Response
{
}
