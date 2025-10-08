<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListFoundationModelAgreementOffers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dimension
 * @property string|null $price
 * @property string|null $description
 * @property string|null $unit
 */
class DimensionalPriceRate extends Shape
{
    /**
     * @param array{
     *     dimension?: string|null,
     *     price?: string|null,
     *     description?: string|null,
     *     unit?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
