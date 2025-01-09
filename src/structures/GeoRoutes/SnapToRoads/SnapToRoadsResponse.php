<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\SnapToRoads;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\RoadSnapNotice> $Notices
 * @property string $PricingBucket
 * @property Shapes\RoadSnapSnappedGeometry $SnappedGeometry
 * @property 'FlexiblePolyline'|'Simple' $SnappedGeometryFormat
 * @property list<Shapes\RoadSnapSnappedTracePoint> $SnappedTracePoints
 */
class SnapToRoadsResponse extends Response
{
}
