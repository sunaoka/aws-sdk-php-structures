<?php

namespace Sunaoka\Aws\Structures\LocationService\SearchPlaceIndexForText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Place $Place
 * @property double|null $Distance
 * @property double|null $Relevance
 * @property string|null $PlaceId
 */
class SearchForTextResult extends Shape
{
    /**
     * @param array{
     *     Place: Place,
     *     Distance?: double|null,
     *     Relevance?: double|null,
     *     PlaceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
