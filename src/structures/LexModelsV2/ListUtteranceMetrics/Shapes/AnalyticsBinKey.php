<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListUtteranceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ConversationStartTime'|'UtteranceTimestamp' $name
 * @property int $value
 */
class AnalyticsBinKey extends Shape
{
    /**
     * @param array{
     *     name?: 'ConversationStartTime'|'UtteranceTimestamp',
     *     value?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
