<?php

namespace Sunaoka\Aws\Structures\LocationService\SearchPlaceIndexForText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Place $Place
 * @property double $Distance
 * @property double $Relevance
 * @property string $PlaceId
 */
class SearchForTextResult extends Shape
{
    /**
     * @param array{
     *     Place: Place,
     *     Distance?: double,
     *     Relevance?: double,
     *     PlaceId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
