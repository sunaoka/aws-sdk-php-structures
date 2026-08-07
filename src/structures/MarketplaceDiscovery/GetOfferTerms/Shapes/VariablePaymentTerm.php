<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOfferTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property 'ByolPricingTerm'|'ConfigurableUpfrontPricingTerm'|'FixedUpfrontPricingTerm'|'UsageBasedPricingTerm'|'FreeTrialPricingTerm'|'LegalTerm'|'PaymentScheduleTerm'|'RecurringPaymentTerm'|'RenewalTerm'|'SupportTerm'|'ValidityTerm'|'VariablePaymentTerm'|'NetPaymentTerm' $type
 * @property string $currencyCode
 * @property string $maxTotalChargeAmount
 */
class VariablePaymentTerm extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     type: 'ByolPricingTerm'|'ConfigurableUpfrontPricingTerm'|'FixedUpfrontPricingTerm'|'UsageBasedPricingTerm'|'FreeTrialPricingTerm'|'LegalTerm'|'PaymentScheduleTerm'|'RecurringPaymentTerm'|'RenewalTerm'|'SupportTerm'|'ValidityTerm'|'VariablePaymentTerm'|'NetPaymentTerm',
     *     currencyCode: string,
     *     maxTotalChargeAmount: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
