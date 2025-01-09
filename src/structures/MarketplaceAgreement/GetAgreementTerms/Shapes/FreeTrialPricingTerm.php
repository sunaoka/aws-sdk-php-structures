<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $duration
 * @property list<GrantItem> $grants
 * @property string $type
 */
class FreeTrialPricingTerm extends Shape
{
    /**
     * @param array{
     *     duration?: string,
     *     grants?: list<GrantItem>,
     *     type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
