<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $currencyCode
 * @property list<UsageBasedRateCardItem> $rateCards
 * @property string $type
 */
class UsageBasedPricingTerm extends Shape
{
    /**
     * @param array{
     *     currencyCode?: string,
     *     rateCards?: list<UsageBasedRateCardItem>,
     *     type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
