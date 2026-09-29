<?php

namespace Sunaoka\Aws\Structures\Billing\ListBusinessSupportAccountCharges\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $supportPlanName
 * @property string $totalCharge
 * @property string $totalUsageBasis
 * @property list<BusinessSupportTierCharge>|null $tierCharges
 * @property BusinessSupportDiscount|null $supportDiscount
 * @property list<BusinessSupportServiceSpend>|null $supportEligibleSpendByService
 */
class BusinessSupportAccountCharge extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     supportPlanName: string,
     *     totalCharge: string,
     *     totalUsageBasis: string,
     *     tierCharges?: list<BusinessSupportTierCharge>|null,
     *     supportDiscount?: BusinessSupportDiscount|null,
     *     supportEligibleSpendByService?: list<BusinessSupportServiceSpend>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
