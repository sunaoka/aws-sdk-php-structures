<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOfferTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property 'ByolPricingTerm'|'ConfigurableUpfrontPricingTerm'|'FixedUpfrontPricingTerm'|'UsageBasedPricingTerm'|'FreeTrialPricingTerm'|'LegalTerm'|'PaymentScheduleTerm'|'RecurringPaymentTerm'|'RenewalTerm'|'SupportTerm'|'ValidityTerm'|'VariablePaymentTerm'|'NetPaymentTerm' $type
 * @property string $paymentDuePeriod
 */
class NetPaymentTerm extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     type: 'ByolPricingTerm'|'ConfigurableUpfrontPricingTerm'|'FixedUpfrontPricingTerm'|'UsageBasedPricingTerm'|'FreeTrialPricingTerm'|'LegalTerm'|'PaymentScheduleTerm'|'RecurringPaymentTerm'|'RenewalTerm'|'SupportTerm'|'ValidityTerm'|'VariablePaymentTerm'|'NetPaymentTerm',
     *     paymentDuePeriod: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
