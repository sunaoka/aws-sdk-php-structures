<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Geocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Overall
 * @property ComponentMatchScores $Components
 */
class MatchScoreDetails extends Shape
{
    /**
     * @param array{
     *     Overall?: double,
     *     Components?: ComponentMatchScores
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
