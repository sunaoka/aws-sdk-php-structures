<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\UpdatePreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'BeforeDiscounts'|'AfterDiscounts'|null $savingsEstimationMode
 * @property 'All'|'None'|null $memberAccountDiscountVisibility
 * @property Shapes\PreferredCommitment|null $preferredCommitment
 */
class UpdatePreferencesRequest extends Request
{
    /**
     * @param array{
     *     savingsEstimationMode?: 'BeforeDiscounts'|'AfterDiscounts'|null,
     *     memberAccountDiscountVisibility?: 'All'|'None'|null,
     *     preferredCommitment?: Shapes\PreferredCommitment|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
