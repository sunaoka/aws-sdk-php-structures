<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\SnapToRoads;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Key
 * @property 'FlexiblePolyline'|'Simple' $SnappedGeometryFormat
 * @property int $SnapRadius
 * @property list<Shapes\RoadSnapTracePoint> $TracePoints
 * @property 'Car'|'Pedestrian'|'Scooter'|'Truck' $TravelMode
 * @property Shapes\RoadSnapTravelModeOptions $TravelModeOptions
 */
class SnapToRoadsRequest extends Request
{
    /**
     * @param array{
     *     Key?: string,
     *     SnappedGeometryFormat?: 'FlexiblePolyline'|'Simple',
     *     SnapRadius?: int,
     *     TracePoints: list<Shapes\RoadSnapTracePoint>,
     *     TravelMode?: 'Car'|'Pedestrian'|'Scooter'|'Truck',
     *     TravelModeOptions?: Shapes\RoadSnapTravelModeOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
