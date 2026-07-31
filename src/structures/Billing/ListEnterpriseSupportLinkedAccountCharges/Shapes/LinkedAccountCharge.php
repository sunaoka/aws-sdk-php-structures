<?php

namespace Sunaoka\Aws\Structures\Billing\ListEnterpriseSupportLinkedAccountCharges\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $payerAccountId
 * @property string|null $accountType
 * @property int $billableSeconds
 * @property int $totalSeconds
 * @property string $totalSupportEligibleSpend
 * @property string $proratedTotalSupportEligibleSpend
 * @property list<EnterpriseSupportTimePeriod>|null $linkedTimePeriods
 * @property list<EnterpriseSupportTimePeriod>|null $subscriptionTimePeriods
 * @property string|null $totalSupportEligibleReservedInstanceSpend
 * @property string|null $totalSupportEligibleSavingsPlanSpend
 * @property list<ServiceLevelAccountUsage>|null $supportEligibleSpendByService
 */
class LinkedAccountCharge extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     payerAccountId: string,
     *     accountType?: string|null,
     *     billableSeconds: int,
     *     totalSeconds: int,
     *     totalSupportEligibleSpend: string,
     *     proratedTotalSupportEligibleSpend: string,
     *     linkedTimePeriods?: list<EnterpriseSupportTimePeriod>|null,
     *     subscriptionTimePeriods?: list<EnterpriseSupportTimePeriod>|null,
     *     totalSupportEligibleReservedInstanceSpend?: string|null,
     *     totalSupportEligibleSavingsPlanSpend?: string|null,
     *     supportEligibleSpendByService?: list<ServiceLevelAccountUsage>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
