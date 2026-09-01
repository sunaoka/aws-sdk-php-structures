<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOfferTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property 'ByolPricingTerm'|'ConfigurableUpfrontPricingTerm'|'FixedUpfrontPricingTerm'|'UsageBasedPricingTerm'|'FreeTrialPricingTerm'|'LegalTerm'|'PaymentScheduleTerm'|'RecurringPaymentTerm'|'RenewalTerm'|'SupportTerm'|'ValidityTerm'|'VariablePaymentTerm'|'NetPaymentTerm' $type
 * @property int<1, max>|null $maxRenewals
 * @property string|null $lockoutPeriod
 * @property string|null $adjustmentDeadline
 * @property PriceIncrease|null $priceIncrease
 * @property list<TermTemplate>|null $termTemplates
 */
class RenewalTerm extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     type: 'ByolPricingTerm'|'ConfigurableUpfrontPricingTerm'|'FixedUpfrontPricingTerm'|'UsageBasedPricingTerm'|'FreeTrialPricingTerm'|'LegalTerm'|'PaymentScheduleTerm'|'RecurringPaymentTerm'|'RenewalTerm'|'SupportTerm'|'ValidityTerm'|'VariablePaymentTerm'|'NetPaymentTerm',
     *     maxRenewals?: int<1, max>|null,
     *     lockoutPeriod?: string|null,
     *     adjustmentDeadline?: string|null,
     *     priceIncrease?: PriceIncrease|null,
     *     termTemplates?: list<TermTemplate>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
