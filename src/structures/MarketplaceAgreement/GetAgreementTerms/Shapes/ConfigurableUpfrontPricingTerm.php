<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConfigurableUpfrontPricingTermConfiguration $configuration
 * @property string $currencyCode
 * @property list<ConfigurableUpfrontRateCardItem> $rateCards
 * @property string $type
 */
class ConfigurableUpfrontPricingTerm extends Shape
{
    /**
     * @param array{
     *     configuration?: ConfigurableUpfrontPricingTermConfiguration,
     *     currencyCode?: string,
     *     rateCards?: list<ConfigurableUpfrontRateCardItem>,
     *     type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
