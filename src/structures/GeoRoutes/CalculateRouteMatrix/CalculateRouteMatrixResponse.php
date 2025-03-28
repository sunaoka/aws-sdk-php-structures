<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int<0, max> $ErrorCount
 * @property string $PricingBucket
 * @property list<list<Shapes\RouteMatrixEntry>> $RouteMatrix
 * @property Shapes\RouteMatrixBoundary $RoutingBoundary
 */
class CalculateRouteMatrixResponse extends Response
{
}
