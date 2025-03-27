<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\GetPreferences;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'>|null $managementAccountRateTypeSelections
 * @property list<'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'>|null $memberAccountRateTypeSelections
 * @property list<'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'>|null $standaloneAccountRateTypeSelections
 */
class GetPreferencesResponse extends Response
{
}
