<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOfferTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dimensionKey
 * @property string $displayName
 * @property string|null $description
 * @property list<DimensionLabel>|null $dimensionLabels
 * @property string $unit
 * @property int|null $maxQuantity
 */
class GrantItem extends Shape
{
    /**
     * @param array{
     *     dimensionKey: string,
     *     displayName: string,
     *     description?: string|null,
     *     dimensionLabels?: list<DimensionLabel>|null,
     *     unit: string,
     *     maxQuantity?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
