<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $multipleDimensionSelection
 * @property string|null $quantityConfiguration
 */
class Constraints extends Shape
{
    /**
     * @param array{
     *     multipleDimensionSelection?: string|null,
     *     quantityConfiguration?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
