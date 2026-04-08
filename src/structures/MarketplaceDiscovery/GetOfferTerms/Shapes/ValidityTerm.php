<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOfferTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property 'ByolPricingTerm'|'ConfigurableUpfrontPricingTerm'|'FixedUpfrontPricingTerm'|'UsageBasedPricingTerm'|'FreeTrialPricingTerm'|'LegalTerm'|'PaymentScheduleTerm'|'RecurringPaymentTerm'|'RenewalTerm'|'SupportTerm'|'ValidityTerm'|'VariablePaymentTerm' $type
 * @property string|null $agreementDuration
 * @property \Aws\Api\DateTimeResult|null $agreementEndDate
 * @property \Aws\Api\DateTimeResult|null $agreementStartDate
 */
class ValidityTerm extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     type: 'ByolPricingTerm'|'ConfigurableUpfrontPricingTerm'|'FixedUpfrontPricingTerm'|'UsageBasedPricingTerm'|'FreeTrialPricingTerm'|'LegalTerm'|'PaymentScheduleTerm'|'RecurringPaymentTerm'|'RenewalTerm'|'SupportTerm'|'ValidityTerm'|'VariablePaymentTerm',
     *     agreementDuration?: string|null,
     *     agreementEndDate?: \Aws\Api\DateTimeResult|null,
     *     agreementStartDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
