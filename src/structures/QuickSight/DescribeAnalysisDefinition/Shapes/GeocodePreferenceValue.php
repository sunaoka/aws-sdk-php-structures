<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeocoderHierarchy|null $GeocoderHierarchy
 * @property Coordinate|null $Coordinate
 */
class GeocodePreferenceValue extends Shape
{
    /**
     * @param array{
     *     GeocoderHierarchy?: GeocoderHierarchy|null,
     *     Coordinate?: Coordinate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
