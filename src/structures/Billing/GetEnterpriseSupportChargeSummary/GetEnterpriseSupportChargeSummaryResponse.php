<?php

namespace Sunaoka\Aws\Structures\Billing\GetEnterpriseSupportChargeSummary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $payerAccountId
 * @property string $billingMonth
 * @property \Aws\Api\DateTimeResult $billingPeriodStartDate
 * @property \Aws\Api\DateTimeResult $billingPeriodEndDate
 * @property bool $isEstimated
 * @property \Aws\Api\DateTimeResult $billDate
 * @property string $supportCharge
 * @property string $totalSupportCharge
 * @property string $supportDiscount
 * @property string $totalSupportEligibleSpend
 * @property string $totalSupportEligibleUsageSpend
 * @property string $totalSupportEligibleReservedInstanceSpend
 * @property string $totalSupportEligibleSavingsPlanSpend
 * @property string $supportChargePercentage
 * @property Shapes\PricingPlan $supportEffectivePricingPlan
 */
class GetEnterpriseSupportChargeSummaryResponse extends Response
{
}
