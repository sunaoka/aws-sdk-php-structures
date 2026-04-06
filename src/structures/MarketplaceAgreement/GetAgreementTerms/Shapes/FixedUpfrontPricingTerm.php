<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $currencyCode
 * @property string|null $duration
 * @property list<GrantItem>|null $grants
 * @property string|null $price
 * @property string|null $type
 */
class FixedUpfrontPricingTerm extends Shape
{
    /**
     * @param array{
     *     currencyCode?: string|null,
     *     duration?: string|null,
     *     grants?: list<GrantItem>|null,
     *     price?: string|null,
     *     type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
