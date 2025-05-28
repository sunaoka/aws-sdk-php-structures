<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\UpdatePreferences;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'BeforeDiscounts'|'AfterDiscounts'|null $savingsEstimationMode
 * @property 'All'|'None'|null $memberAccountDiscountVisibility
 * @property Shapes\PreferredCommitment|null $preferredCommitment
 */
class UpdatePreferencesResponse extends Response
{
}
