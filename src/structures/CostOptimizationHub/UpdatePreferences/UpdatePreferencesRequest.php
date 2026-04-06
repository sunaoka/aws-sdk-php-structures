<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\UpdatePreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'BeforeDiscounts'|'AfterDiscounts'|null $savingsEstimationMode
 * @property 'All'|'None'|null $memberAccountDiscountVisibility
 */
class UpdatePreferencesRequest extends Request
{
    /**
     * @param array{
     *     savingsEstimationMode?: 'BeforeDiscounts'|'AfterDiscounts'|null,
     *     memberAccountDiscountVisibility?: 'All'|'None'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
