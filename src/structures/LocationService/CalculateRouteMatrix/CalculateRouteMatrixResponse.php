<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRouteMatrix;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<list<Shapes\RouteMatrixEntry>> $RouteMatrix
 * @property list<list<double>> $SnappedDeparturePositions
 * @property list<list<double>> $SnappedDestinationPositions
 * @property Shapes\CalculateRouteMatrixSummary $Summary
 */
class CalculateRouteMatrixResponse extends Response
{
}
