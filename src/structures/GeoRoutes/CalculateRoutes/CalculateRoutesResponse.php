<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'FlexiblePolyline'|'Simple' $LegGeometryFormat
 * @property list<Shapes\RouteResponseNotice> $Notices
 * @property string $PricingBucket
 * @property list<Shapes\Route> $Routes
 */
class CalculateRoutesResponse extends Response
{
}
