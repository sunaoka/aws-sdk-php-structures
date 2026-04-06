<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $type
 * @property string|null $currencyCode
 * @property string|null $duration
 * @property string|null $price
 * @property list<GrantItem>|null $grants
 */
class FixedUpfrontPricingTerm extends Shape
{
    /**
     * @param array{
     *     type?: string|null,
     *     currencyCode?: string|null,
     *     duration?: string|null,
     *     price?: string|null,
     *     grants?: list<GrantItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
