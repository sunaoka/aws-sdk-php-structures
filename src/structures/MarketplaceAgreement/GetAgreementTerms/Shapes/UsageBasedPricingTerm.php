<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $type
 * @property string|null $currencyCode
 * @property list<UsageBasedRateCardItem>|null $rateCards
 */
class UsageBasedPricingTerm extends Shape
{
    /**
     * @param array{
     *     type?: string|null,
     *     currencyCode?: string|null,
     *     rateCards?: list<UsageBasedRateCardItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
