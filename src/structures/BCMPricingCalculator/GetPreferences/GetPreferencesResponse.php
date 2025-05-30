<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\GetPreferences;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'|'AFTER_DISCOUNTS_AND_COMMITMENTS'>|null $managementAccountRateTypeSelections
 * @property list<'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'|'AFTER_DISCOUNTS_AND_COMMITMENTS'>|null $memberAccountRateTypeSelections
 * @property list<'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'|'AFTER_DISCOUNTS_AND_COMMITMENTS'>|null $standaloneAccountRateTypeSelections
 */
class GetPreferencesResponse extends Response
{
}
