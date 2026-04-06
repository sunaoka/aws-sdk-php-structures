<?php

namespace Sunaoka\Aws\Structures\LocationService\SearchPlaceIndexForText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Distance
 * @property Place $Place
 * @property string|null $PlaceId
 * @property double|null $Relevance
 */
class SearchForTextResult extends Shape
{
    /**
     * @param array{
     *     Distance?: double|null,
     *     Place: Place,
     *     PlaceId?: string|null,
     *     Relevance?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
