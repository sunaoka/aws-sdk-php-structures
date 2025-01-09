<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ArrivalTime
 * @property string $DepartureTime
 * @property 'FlexiblePolyline'|'Simple' $IsolineGeometryFormat
 * @property list<Shapes\Isoline> $Isolines
 * @property string $PricingBucket
 * @property list<double> $SnappedDestination
 * @property list<double> $SnappedOrigin
 */
class CalculateIsolinesResponse extends Response
{
}
