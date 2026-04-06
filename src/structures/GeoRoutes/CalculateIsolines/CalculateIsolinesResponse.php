<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ArrivalTime
 * @property string|null $DepartureTime
 * @property 'FlexiblePolyline'|'Simple' $IsolineGeometryFormat
 * @property list<Shapes\Isoline> $Isolines
 * @property string $PricingBucket
 * @property list<double>|null $SnappedDestination
 * @property list<double>|null $SnappedOrigin
 */
class CalculateIsolinesResponse extends Response
{
}
