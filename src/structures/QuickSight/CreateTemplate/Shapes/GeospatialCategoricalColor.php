<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GeospatialCategoricalDataColor> $CategoryDataColors
 * @property 'HIDDEN'|'VISIBLE'|null $NullDataVisibility
 * @property GeospatialNullDataSettings|null $NullDataSettings
 * @property double|null $DefaultOpacity
 */
class GeospatialCategoricalColor extends Shape
{
    /**
     * @param array{
     *     CategoryDataColors: list<GeospatialCategoricalDataColor>,
     *     NullDataVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     NullDataSettings?: GeospatialNullDataSettings|null,
     *     DefaultOpacity?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
