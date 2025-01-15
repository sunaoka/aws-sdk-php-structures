<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRouteMatrix;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<list<Shapes\RouteMatrixEntry>> $RouteMatrix
 * @property list<list<double>>|null $SnappedDeparturePositions
 * @property list<list<double>>|null $SnappedDestinationPositions
 * @property Shapes\CalculateRouteMatrixSummary $Summary
 */
class CalculateRouteMatrixResponse extends Response
{
}
