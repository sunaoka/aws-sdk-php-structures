<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListUtteranceAnalyticsData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UtteranceTimestamp' $name
 * @property 'Ascending'|'Descending' $order
 */
class UtteranceDataSortBy extends Shape
{
    /**
     * @param array{
     *     name: 'UtteranceTimestamp',
     *     order: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
