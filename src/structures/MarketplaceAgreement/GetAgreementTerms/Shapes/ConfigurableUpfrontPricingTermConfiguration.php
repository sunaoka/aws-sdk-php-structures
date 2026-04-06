<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $selectorValue
 * @property list<Dimension> $dimensions
 */
class ConfigurableUpfrontPricingTermConfiguration extends Shape
{
    /**
     * @param array{
     *     selectorValue: string,
     *     dimensions: list<Dimension>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
