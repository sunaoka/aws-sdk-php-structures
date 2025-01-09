<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\UpdatePreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'BeforeDiscounts'|'AfterDiscounts' $savingsEstimationMode
 * @property 'All'|'None' $memberAccountDiscountVisibility
 */
class UpdatePreferencesRequest extends Request
{
    /**
     * @param array{
     *     savingsEstimationMode?: 'BeforeDiscounts'|'AfterDiscounts',
     *     memberAccountDiscountVisibility?: 'All'|'None'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
