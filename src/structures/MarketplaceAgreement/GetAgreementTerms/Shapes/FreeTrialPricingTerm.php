<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $type
 * @property string|null $duration
 * @property list<GrantItem>|null $grants
 */
class FreeTrialPricingTerm extends Shape
{
    /**
     * @param array{
     *     type?: string|null,
     *     duration?: string|null,
     *     grants?: list<GrantItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
