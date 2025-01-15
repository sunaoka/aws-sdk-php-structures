<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\SnapToRoads;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Key
 * @property 'FlexiblePolyline'|'Simple'|null $SnappedGeometryFormat
 * @property int<0, 10000>|null $SnapRadius
 * @property list<Shapes\RoadSnapTracePoint> $TracePoints
 * @property 'Car'|'Pedestrian'|'Scooter'|'Truck'|null $TravelMode
 * @property Shapes\RoadSnapTravelModeOptions|null $TravelModeOptions
 */
class SnapToRoadsRequest extends Request
{
    /**
     * @param array{
     *     Key?: string|null,
     *     SnappedGeometryFormat?: 'FlexiblePolyline'|'Simple'|null,
     *     SnapRadius?: int<0, 10000>|null,
     *     TracePoints: list<Shapes\RoadSnapTracePoint>,
     *     TravelMode?: 'Car'|'Pedestrian'|'Scooter'|'Truck'|null,
     *     TravelModeOptions?: Shapes\RoadSnapTravelModeOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
