<?php

namespace Sunaoka\Aws\Structures\Billing\GetEnterpriseSupportContractDetails;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $isContractActive
 * @property string $supportAllocationMethod
 * @property \Aws\Api\DateTimeResult|null $supportReservedInstanceAmortizationStartDate
 * @property string|null $supportReservedInstanceTreatmentMethod
 * @property \Aws\Api\DateTimeResult|null $supportSavingsPlansAmortizationStartDate
 * @property string|null $supportSavingsPlansTreatmentMethod
 * @property \Aws\Api\DateTimeResult|null $supportProrateStartDate
 * @property list<Shapes\ContractAccount> $contractPayerAccountIds
 * @property list<Shapes\ChargeAccount> $chargedPayerAccountIds
 * @property list<Shapes\AdditionalCharge>|null $additionalSupportCharge
 * @property list<Shapes\AdditionalCharge>|null $additionalSupportEligibleUsageSpend
 * @property list<Shapes\PricingPlan> $pricingPlans
 */
class GetEnterpriseSupportContractDetailsResponse extends Response
{
}
