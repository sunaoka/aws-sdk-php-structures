<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ByolPricingTerm|null $byolPricingTerm
 * @property ConfigurableUpfrontPricingTerm|null $configurableUpfrontPricingTerm
 * @property FixedUpfrontPricingTerm|null $fixedUpfrontPricingTerm
 * @property FreeTrialPricingTerm|null $freeTrialPricingTerm
 * @property LegalTerm|null $legalTerm
 * @property PaymentScheduleTerm|null $paymentScheduleTerm
 * @property RecurringPaymentTerm|null $recurringPaymentTerm
 * @property RenewalTerm|null $renewalTerm
 * @property SupportTerm|null $supportTerm
 * @property UsageBasedPricingTerm|null $usageBasedPricingTerm
 * @property ValidityTerm|null $validityTerm
 */
class AcceptedTerm extends Shape
{
    /**
     * @param array{
     *     byolPricingTerm?: ByolPricingTerm|null,
     *     configurableUpfrontPricingTerm?: ConfigurableUpfrontPricingTerm|null,
     *     fixedUpfrontPricingTerm?: FixedUpfrontPricingTerm|null,
     *     freeTrialPricingTerm?: FreeTrialPricingTerm|null,
     *     legalTerm?: LegalTerm|null,
     *     paymentScheduleTerm?: PaymentScheduleTerm|null,
     *     recurringPaymentTerm?: RecurringPaymentTerm|null,
     *     renewalTerm?: RenewalTerm|null,
     *     supportTerm?: SupportTerm|null,
     *     usageBasedPricingTerm?: UsageBasedPricingTerm|null,
     *     validityTerm?: ValidityTerm|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
