<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $currencyCode
 * @property string $duration
 * @property list<GrantItem> $grants
 * @property string $price
 * @property string $type
 */
class FixedUpfrontPricingTerm extends Shape
{
    /**
     * @param array{
     *     currencyCode?: string,
     *     duration?: string,
     *     grants?: list<GrantItem>,
     *     price?: string,
     *     type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
