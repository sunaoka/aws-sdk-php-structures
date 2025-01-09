<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSessionAnalyticsData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ConversationStartTime'|'NumberOfTurns'|'Duration' $name
 * @property 'Ascending'|'Descending' $order
 */
class SessionDataSortBy extends Shape
{
    /**
     * @param array{
     *     name: 'ConversationStartTime'|'NumberOfTurns'|'Duration',
     *     order: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
