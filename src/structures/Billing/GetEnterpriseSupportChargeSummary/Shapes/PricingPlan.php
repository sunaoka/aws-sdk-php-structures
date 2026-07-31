<?php

namespace Sunaoka\Aws\Structures\Billing\GetEnterpriseSupportChargeSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $pricingPlanId
 * @property string|null $name
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $startDate
 * @property \Aws\Api\DateTimeResult|null $endDate
 * @property string|null $planDiscountPercent
 * @property bool|null $discountAppliesToMinimumCharge
 * @property string|null $minimumCharge
 * @property string|null $tiered
 * @property list<PricingPlanTier> $tiers
 */
class PricingPlan extends Shape
{
    /**
     * @param array{
     *     pricingPlanId?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     startDate?: \Aws\Api\DateTimeResult|null,
     *     endDate?: \Aws\Api\DateTimeResult|null,
     *     planDiscountPercent?: string|null,
     *     discountAppliesToMinimumCharge?: bool|null,
     *     minimumCharge?: string|null,
     *     tiered?: string|null,
     *     tiers: list<PricingPlanTier>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
