<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListAggregatedUtterances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RelativeAggregationDuration $relativeAggregationDuration
 */
class UtteranceAggregationDuration extends Shape
{
    /**
     * @param array{relativeAggregationDuration: RelativeAggregationDuration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
