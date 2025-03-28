<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntentStageMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ConversationStartTime'|'UtteranceTimestamp' $name
 * @property 'OneHour'|'OneDay' $interval
 * @property 'Ascending'|'Descending'|null $order
 */
class AnalyticsBinBySpecification extends Shape
{
    /**
     * @param array{
     *     name: 'ConversationStartTime'|'UtteranceTimestamp',
     *     interval: 'OneHour'|'OneDay',
     *     order?: 'Ascending'|'Descending'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
