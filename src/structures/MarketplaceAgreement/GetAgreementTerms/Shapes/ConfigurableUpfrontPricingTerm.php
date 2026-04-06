<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConfigurableUpfrontPricingTermConfiguration|null $configuration
 * @property string|null $currencyCode
 * @property list<ConfigurableUpfrontRateCardItem>|null $rateCards
 * @property string|null $type
 */
class ConfigurableUpfrontPricingTerm extends Shape
{
    /**
     * @param array{
     *     configuration?: ConfigurableUpfrontPricingTermConfiguration|null,
     *     currencyCode?: string|null,
     *     rateCards?: list<ConfigurableUpfrontRateCardItem>|null,
     *     type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
