<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Selector|null $selector
 * @property Constraints|null $constraints
 * @property list<RateCardItem>|null $rateCard
 */
class ConfigurableUpfrontRateCardItem extends Shape
{
    /**
     * @param array{
     *     selector?: Selector|null,
     *     constraints?: Constraints|null,
     *     rateCard?: list<RateCardItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
