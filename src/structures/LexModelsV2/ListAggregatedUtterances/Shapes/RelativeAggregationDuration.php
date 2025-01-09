<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListAggregatedUtterances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Hours'|'Days'|'Weeks' $timeDimension
 * @property int $timeValue
 */
class RelativeAggregationDuration extends Shape
{
    /**
     * @param array{
     *     timeDimension: 'Hours'|'Days'|'Weeks',
     *     timeValue: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
