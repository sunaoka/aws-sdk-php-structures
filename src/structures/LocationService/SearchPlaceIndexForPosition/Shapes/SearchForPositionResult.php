<?php

namespace Sunaoka\Aws\Structures\LocationService\SearchPlaceIndexForPosition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Distance
 * @property Place $Place
 * @property string|null $PlaceId
 */
class SearchForPositionResult extends Shape
{
    /**
     * @param array{
     *     Distance: double,
     *     Place: Place,
     *     PlaceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
