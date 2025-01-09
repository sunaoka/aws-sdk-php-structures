<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GeospatialCategoricalDataColor> $CategoryDataColors
 * @property 'HIDDEN'|'VISIBLE' $NullDataVisibility
 * @property GeospatialNullDataSettings $NullDataSettings
 * @property double $DefaultOpacity
 */
class GeospatialCategoricalColor extends Shape
{
    /**
     * @param array{
     *     CategoryDataColors: list<GeospatialCategoricalDataColor>,
     *     NullDataVisibility?: 'HIDDEN'|'VISIBLE',
     *     NullDataSettings?: GeospatialNullDataSettings,
     *     DefaultOpacity?: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
