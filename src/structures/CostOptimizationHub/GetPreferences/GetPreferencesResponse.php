<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetPreferences;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'BeforeDiscounts'|'AfterDiscounts'|null $savingsEstimationMode
 * @property 'All'|'None'|null $memberAccountDiscountVisibility
 */
class GetPreferencesResponse extends Response
{
}
