<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Geocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Overall
 * @property ComponentMatchScores|null $Components
 */
class MatchScoreDetails extends Shape
{
    /**
     * @param array{
     *     Overall?: double|null,
     *     Components?: ComponentMatchScores|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
