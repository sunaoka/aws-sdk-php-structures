<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $currencyCode
 * @property list<UsageBasedRateCardItem>|null $rateCards
 * @property string|null $type
 */
class UsageBasedPricingTerm extends Shape
{
    /**
     * @param array{
     *     currencyCode?: string|null,
     *     rateCards?: list<UsageBasedRateCardItem>|null,
     *     type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
