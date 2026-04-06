<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property DimensionField $XAxisField
 * @property 'SHARED'|'INDEPENDENT'|null $YAxisBehavior
 * @property 'LINE'|'AREA_LINE'|null $VisualType
 * @property string|null $LineColor
 * @property 'LINEAR'|'SMOOTH'|'STEPPED'|null $LineInterpolation
 * @property LineChartMarkerStyleSettings|null $AllPointsMarker
 * @property LineChartMarkerStyleSettings|null $MaxValueMarker
 * @property LineChartMarkerStyleSettings|null $MinValueMarker
 */
class SparklinesOptions extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     XAxisField: DimensionField,
     *     YAxisBehavior?: 'SHARED'|'INDEPENDENT'|null,
     *     VisualType?: 'LINE'|'AREA_LINE'|null,
     *     LineColor?: string|null,
     *     LineInterpolation?: 'LINEAR'|'SMOOTH'|'STEPPED'|null,
     *     AllPointsMarker?: LineChartMarkerStyleSettings|null,
     *     MaxValueMarker?: LineChartMarkerStyleSettings|null,
     *     MinValueMarker?: LineChartMarkerStyleSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
