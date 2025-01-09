<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListAggregatedUtterances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HitCount'|'MissedCount' $attribute
 * @property 'Ascending'|'Descending' $order
 */
class AggregatedUtterancesSortBy extends Shape
{
    /**
     * @param array{
     *     attribute: 'HitCount'|'MissedCount',
     *     order: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
