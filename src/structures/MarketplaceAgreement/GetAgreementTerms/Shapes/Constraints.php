<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $multipleDimensionSelection
 * @property string $quantityConfiguration
 */
class Constraints extends Shape
{
    /**
     * @param array{
     *     multipleDimensionSelection?: string,
     *     quantityConfiguration?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
