<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Dimension> $dimensions
 * @property string $selectorValue
 */
class ConfigurableUpfrontPricingTermConfiguration extends Shape
{
    /**
     * @param array{
     *     dimensions: list<Dimension>,
     *     selectorValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
