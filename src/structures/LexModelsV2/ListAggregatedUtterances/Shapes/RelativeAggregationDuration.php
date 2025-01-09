<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListAggregatedUtterances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Hours'|'Days'|'Weeks' $timeDimension
 * @property int<1, 24> $timeValue
 */
class RelativeAggregationDuration extends Shape
{
    /**
     * @param array{
     *     timeDimension: 'Hours'|'Days'|'Weeks',
     *     timeValue: int<1, 24>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
