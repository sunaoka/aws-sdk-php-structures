<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Constraints $constraints
 * @property list<RateCardItem> $rateCard
 * @property Selector $selector
 */
class ConfigurableUpfrontRateCardItem extends Shape
{
    /**
     * @param array{
     *     constraints?: Constraints,
     *     rateCard?: list<RateCardItem>,
     *     selector?: Selector
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
