<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $type
 * @property string|null $currencyCode
 * @property list<ConfigurableUpfrontRateCardItem>|null $rateCards
 * @property ConfigurableUpfrontPricingTermConfiguration|null $configuration
 */
class ConfigurableUpfrontPricingTerm extends Shape
{
    /**
     * @param array{
     *     type?: string|null,
     *     currencyCode?: string|null,
     *     rateCards?: list<ConfigurableUpfrontRateCardItem>|null,
     *     configuration?: ConfigurableUpfrontPricingTermConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
