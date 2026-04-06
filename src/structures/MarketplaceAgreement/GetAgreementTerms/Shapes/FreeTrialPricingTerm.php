<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $duration
 * @property list<GrantItem>|null $grants
 * @property string|null $type
 */
class FreeTrialPricingTerm extends Shape
{
    /**
     * @param array{
     *     duration?: string|null,
     *     grants?: list<GrantItem>|null,
     *     type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
