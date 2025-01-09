<?php

namespace Sunaoka\Aws\Structures\LocationService\SearchPlaceIndexForPosition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Place $Place
 * @property double $Distance
 * @property string $PlaceId
 */
class SearchForPositionResult extends Shape
{
    /**
     * @param array{
     *     Place: Place,
     *     Distance: double,
     *     PlaceId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
