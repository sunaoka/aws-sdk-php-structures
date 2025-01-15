<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Constraints|null $constraints
 * @property list<RateCardItem>|null $rateCard
 * @property Selector|null $selector
 */
class ConfigurableUpfrontRateCardItem extends Shape
{
    /**
     * @param array{
     *     constraints?: Constraints|null,
     *     rateCard?: list<RateCardItem>|null,
     *     selector?: Selector|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
