<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LegalTerm|null $legalTerm
 * @property SupportTerm|null $supportTerm
 * @property RenewalTerm|null $renewalTerm
 * @property UsageBasedPricingTerm|null $usageBasedPricingTerm
 * @property ConfigurableUpfrontPricingTerm|null $configurableUpfrontPricingTerm
 * @property ByolPricingTerm|null $byolPricingTerm
 * @property RecurringPaymentTerm|null $recurringPaymentTerm
 * @property ValidityTerm|null $validityTerm
 * @property PaymentScheduleTerm|null $paymentScheduleTerm
 * @property FreeTrialPricingTerm|null $freeTrialPricingTerm
 * @property FixedUpfrontPricingTerm|null $fixedUpfrontPricingTerm
 * @property VariablePaymentTerm|null $variablePaymentTerm
 */
class AcceptedTerm extends Shape
{
    /**
     * @param array{
     *     legalTerm?: LegalTerm|null,
     *     supportTerm?: SupportTerm|null,
     *     renewalTerm?: RenewalTerm|null,
     *     usageBasedPricingTerm?: UsageBasedPricingTerm|null,
     *     configurableUpfrontPricingTerm?: ConfigurableUpfrontPricingTerm|null,
     *     byolPricingTerm?: ByolPricingTerm|null,
     *     recurringPaymentTerm?: RecurringPaymentTerm|null,
     *     validityTerm?: ValidityTerm|null,
     *     paymentScheduleTerm?: PaymentScheduleTerm|null,
     *     freeTrialPricingTerm?: FreeTrialPricingTerm|null,
     *     fixedUpfrontPricingTerm?: FixedUpfrontPricingTerm|null,
     *     variablePaymentTerm?: VariablePaymentTerm|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
