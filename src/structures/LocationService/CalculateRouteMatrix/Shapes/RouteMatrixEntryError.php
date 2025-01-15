<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RouteNotFound'|'RouteTooLong'|'PositionsNotFound'|'DestinationPositionNotFound'|'DeparturePositionNotFound'|'OtherValidationError' $Code
 * @property string|null $Message
 */
class RouteMatrixEntryError extends Shape
{
    /**
     * @param array{
     *     Code: 'RouteNotFound'|'RouteTooLong'|'PositionsNotFound'|'DestinationPositionNotFound'|'DeparturePositionNotFound'|'OtherValidationError',
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
