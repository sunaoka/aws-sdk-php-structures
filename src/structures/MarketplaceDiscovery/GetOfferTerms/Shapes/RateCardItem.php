<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOfferTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dimensionKey
 * @property string $displayName
 * @property string|null $description
 * @property list<DimensionLabel>|null $dimensionLabels
 * @property string $unit
 * @property string $price
 * @property list<RegionalPrice> $regionalPrices
 */
class RateCardItem extends Shape
{
    /**
     * @param array{
     *     dimensionKey: string,
     *     displayName: string,
     *     description?: string|null,
     *     dimensionLabels?: list<DimensionLabel>|null,
     *     unit: string,
     *     price: string,
     *     regionalPrices: list<RegionalPrice>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
