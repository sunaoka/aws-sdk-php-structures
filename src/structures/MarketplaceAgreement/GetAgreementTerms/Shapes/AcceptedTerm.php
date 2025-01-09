<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ByolPricingTerm $byolPricingTerm
 * @property ConfigurableUpfrontPricingTerm $configurableUpfrontPricingTerm
 * @property FixedUpfrontPricingTerm $fixedUpfrontPricingTerm
 * @property FreeTrialPricingTerm $freeTrialPricingTerm
 * @property LegalTerm $legalTerm
 * @property PaymentScheduleTerm $paymentScheduleTerm
 * @property RecurringPaymentTerm $recurringPaymentTerm
 * @property RenewalTerm $renewalTerm
 * @property SupportTerm $supportTerm
 * @property UsageBasedPricingTerm $usageBasedPricingTerm
 * @property ValidityTerm $validityTerm
 */
class AcceptedTerm extends Shape
{
    /**
     * @param array{
     *     byolPricingTerm?: ByolPricingTerm,
     *     configurableUpfrontPricingTerm?: ConfigurableUpfrontPricingTerm,
     *     fixedUpfrontPricingTerm?: FixedUpfrontPricingTerm,
     *     freeTrialPricingTerm?: FreeTrialPricingTerm,
     *     legalTerm?: LegalTerm,
     *     paymentScheduleTerm?: PaymentScheduleTerm,
     *     recurringPaymentTerm?: RecurringPaymentTerm,
     *     renewalTerm?: RenewalTerm,
     *     supportTerm?: SupportTerm,
     *     usageBasedPricingTerm?: UsageBasedPricingTerm,
     *     validityTerm?: ValidityTerm
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
